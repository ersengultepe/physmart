<?php

namespace App\Http\Controllers;

use App\Category;
use App\Haber;
use App\Http\Requests\HaberStoreRequest;
use App\Sirku;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

class HaberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $haberler = Haber::all();
        return view('admin.haber.index', compact('haberler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.haber.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HaberStoreRequest $request)
    {
        //Klasör adı yıl ve ay birleşimi olacak Örn: 201709 gibi
        $dt = Carbon::parse(Carbon::now());

        /**
         * Her ay için resimlerin ayrı saklanacağı klasör oluşturulacak
         * Aynı isimde klasör varsa işlem yapılmayacak
         */
        $folderCreate = Helper::folderCreate($dt->year.$dt->month,'images/haber/',0755,true,true);

        if($folderCreate == 'hata'){
            return Redirect::route('haber.create');
        }

        $path = 'images/haber/'.$dt->year.$dt->month.'/';
        $pictureFileName = Helper::imgFileNameGenerator($request);

        //Öncelikle fotoğrafı kaydedelim
        $filename = Helper::imgSave($request, $pictureFileName,'image',600,400, $path);

        $datalar = $request->all();

        $datalar['slug'] = str_slug($request->title);

        $datalar['image'] = $path.$filename;

        $datalar['botlink'] = str_random();

        Haber::create($datalar);
        \Session::flash('create', 'Yeni haber eklendi.');
        return Redirect::route('haber.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $haber = Haber::findOrFail($id);
        return view('admin.haber.show', compact('haber'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $haber = Haber::findOrFail($id);
        return view('admin.haber.edit', compact('haber', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $haber = $request->all();

        if($request->mevcut_foto === null and $request->image === null){

            unset($haber->mevcut_foto);
            $haber['image'] = asset('pa/HTML/assets/images/patterns/linen.flaticon');
        } elseif ($request->image === null) {

            $haber['image'] = $request->mevcut_foto;
            unset($haber['mevcut-foto']);
        }else{

            //Klasör adı yıl ve ay birleşimi olacak Örn: 201709 gibi
            $dt = Carbon::parse(Carbon::now());

            /**
             * Her ay için resimlerin ayrı saklanacağı klasör oluşturulacak
             * Aynı isimde klasör varsa işlem yapılmayacak
             */
            $folderCreate = Helper::folderCreate($dt->year.$dt->month,'images/haber/',0755,true,true);

            if($folderCreate == 'hata'){
                return Redirect::back();
            }

            $imgName = Helper::imgFileNameGenerator($request,'updated');

            //images/post/201710
            $path = 'images/haber/'.$dt->year.$dt->month.'/';

            $imgFileName = Helper::imgSave($request,$imgName,'image',600,400,$path);

            $haber['image'] =   $path.$imgFileName;

            if($request->mevcut_foto !== null){
                File::delete(public_path($request->mevcut_foto));
            }

        }

        $haber['slug'] = str_slug($request->title);

        Haber::findOrFail($id)->update($haber);

        return Redirect::route('haber.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $haber = Haber::findOrFail($id);
        $haber->delete();
        return Redirect::route('haber.index');
    }

    public function tosirku($id)
    {
        $haber = Haber::findOrFail($id);

        $sirku = new Sirku();
        $sirku->title = $haber->title;
        $sirku->slug = $haber->slug;
        $sirku->body = $haber->body;
        $sirku->botlink = $haber->botlink;
        $sirku->category_id = $haber->category_id;
        $sirku->user_id = $haber->user_id;
        $sirku->publish = $haber->publish;
        $sirku->saveOrFail();

        $haber->delete();

        return Redirect::route('haber.index');
    }

}
