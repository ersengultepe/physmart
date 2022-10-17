<?php

namespace App\Http\Controllers;

use App\Egitim;
use App\Http\Requests\EgitimStoreRequest;
use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

class EgitimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $egitimler = Egitim::where('publish', '=',1)->orderBy('created_at', 'desc')->get();
        return view('admin.egitim.index', compact('egitimler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.egitim.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EgitimStoreRequest $request)
    {
        //Klasör adı yıl ve ay birleşimi olacak Örn: 201709 gibi
        $dt = Carbon::parse(Carbon::now());

        /**
         * Her ay için resimlerin ayrı saklanacağı klasör oluşturulacak
         * Aynı isimde klasör varsa işlem yapılmayacak
         */
        $folderCreate = Helper::folderCreate($dt->year.$dt->month,'images/egitim/',0755,true,true);

        if($folderCreate == 'hata'){
            return Redirect::route('egitim.create');
        }

        $path = 'images/egitim/'.$dt->year.$dt->month.'/';
        $pictureFileName = Helper::imgFileNameGenerator($request);

        //Öncelikle fotoğrafı kaydedelim
        $filename = Helper::imgSave($request, $pictureFileName,'image',600,400, $path);

        $datalar = $request->all();

        $datalar['slug'] = str_slug($request->title);

        $datalar['image'] = $path.$filename;

        Egitim::create($datalar);
        \Session::flash('create', 'Yeni eğitim eklendi.');
        return Redirect::route('egitim.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $egitim = Egitim::findOrFail($id);
        return view('admin.egitim.show', compact('egitim'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $egitim = Egitim::findOrFail($id);
        return view('admin.egitim.edit', compact('egitim'));
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

        $egitim = $request->all();

        if($request->mevcut_foto === null and $request->image === null){

            unset($egitim->mevcut_foto);
            $egitim['image'] = asset('pa/HTML/assets/images/patterns/linen.flaticon');
        }
        elseif($request->image === null){

            $egitim['image'] = $request->mevcut_foto;
            unset($egitim['mevcut-foto']);
        }else{

            //Klasör adı yıl ve ay birleşimi olacak Örn: 201709 gibi
            $dt = Carbon::parse(Carbon::now());

            /**
             * Her ay için resimlerin ayrı saklanacağı klasör oluşturulacak
             * Aynı isimde klasör varsa işlem yapılmayacak
             */
            $folderCreate = Helper::folderCreate($dt->year.$dt->month,'images/egitim/',0755,true,true);

            if($folderCreate == 'hata'){
                return Redirect::back();
            }

            $imgName = Helper::imgFileNameGenerator($request,'updated');

            //images/post/201710
            $path = 'images/egitim/'.$dt->year.$dt->month.'/';

            $imgFileName = Helper::imgSave($request,$imgName,'image',600,400,$path);

            $egitim['image'] =   $path.$imgFileName;


            if($request->mevcut_foto !== null){
                File::delete(public_path($request->mevcut_foto));
            }

        }

        $egitim['slug'] = str_slug($request->title);

        Egitim::findOrFail($id)->update($egitim);

        return Redirect::route('egitim.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $egitim = Egitim::findOrFail($id);
        $egitim->delete();
        return Redirect::route('egitim.index');
    }
}
