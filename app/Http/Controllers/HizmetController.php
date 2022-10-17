<?php

namespace App\Http\Controllers;

use App\Hizmet;
use App\Http\Requests\HizmetStoreRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

class HizmetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hizmetler = Hizmet::where('publish', '=',1)->orderBy('created_at', 'desc')->get();
        return view('admin.hizmet.index', compact('hizmetler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hizmet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HizmetStoreRequest $request)
    {
        //Klasör adı yıl ve ay birleşimi olacak Örn: 201709 gibi
        $dt = Carbon::parse(Carbon::now());

        /**
         * Her ay için resimlerin ayrı saklanacağı klasör oluşturulacak
         * Aynı isimde klasör varsa işlem yapılmayacak
         */
        $folderCreate = Helper::folderCreate($dt->year.$dt->month,'images/hizmet/',0755,true,true);

        if($folderCreate == 'hata'){
            return Redirect::route('hizmet.create');
        }

        $path = 'images'.DIRECTORY_SEPARATOR.'hizmet'.DIRECTORY_SEPARATOR.$dt->year.$dt->month.DIRECTORY_SEPARATOR;
        $pictureFileName = Helper::imgFileNameGenerator($request);

        //Öncelikle fotoğrafı kaydedelim
        $filename = Helper::imgSave($request, $pictureFileName,'image',600,400, $path);

        $datalar = $request->all();
        $datalar['slug'] = str_slug($request->title);
        $datalar['image'] = $path.$filename;

        Hizmet::create($datalar);
        \Session::flash('create', 'Yeni hizmet eklendi.');
        return Redirect::route('hizmet.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hizmet = Hizmet::findOrFail($id);
        return view('admin.hizmet.show', compact('hizmet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hizmet = Hizmet::find($id);
        return view('admin.hizmet.edit', compact('hizmet'));
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

        $hizmet = $request->all();

        if($request->mevcut_foto === null and $request->image === null){

            unset($hizmet->mevcut_foto);
            $hizmet['image'] = asset('pa/HTML/assets/images/patterns/linen.flaticon');
        }
        elseif($request->image === null){

            $hizmet['image'] = $request->mevcut_foto;
            unset($hizmet['mevcut-foto']);
        }else{
            //Klasör adı yıl ve ay birleşimi olacak Örn: 201709 gibi
            $dt = Carbon::parse(Carbon::now());

            /**
             * Her ay için resimlerin ayrı saklanacağı klasör oluşturulacak
             * Aynı isimde klasör varsa işlem yapılmayacak
             */
            $folderCreate = Helper::folderCreate($dt->year.$dt->month,'images/hizmet/',0755,true,true);

            if($folderCreate == 'hata'){
                return Redirect::back();
            }

            $imgName = Helper::imgFileNameGenerator($request,'updated');

            $path = 'images'.DIRECTORY_SEPARATOR.'hizmet'.DIRECTORY_SEPARATOR.$dt->year.$dt->month.DIRECTORY_SEPARATOR;

            $imgFileName = Helper::imgSave($request,$imgName,'image',600,400,$path);

            if($imgFileName != false){
                $hizmet['image'] =   $path.$imgFileName;
            }

            if($request->mevcut_foto !== null){
                File::delete(public_path($request->mevcut_foto));
            }

        }

        $hizmet['slug'] = str_slug($request->title);

        Hizmet::findOrFail($id)->update($hizmet);

        return Redirect::route('hizmet.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $hizmet = Hizmet::findOrFail($id);

        $hizmet->delete();

        File::delete(url($hizmet->image));

        return Redirect::route('hizmet.index');
    }
}
