<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('publish', '=',1)->orderBy('id', 'desc')->get();
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.post.create', compact('categories'));
    }

    public function store(Request $request)
    {
        //Klasör adı yıl ve ay birleşimi olacak Örn: 201709 gibi
        $dt = Carbon::parse(Carbon::now());

        /**
         * Her ay için resimlerin ayrı saklanacağı klasör oluşturulacak
         * Aynı isimde klasör varsa işlem yapılmayacak
         */
        $folderCreate = Helper::folderCreate($dt->year.$dt->month,'images/post/',0755,true,true);

        if($folderCreate == 'hata'){
            return Redirect::route('post.create');
        }

        $path = 'images/post/'.$dt->year.$dt->month.'/';
        $pictureFileName = Helper::imgFileNameGenerator($request);

        //Öncelikle fotoğrafı kaydedelim
        $filename = Helper::imgSave($request, $pictureFileName,'image',600,400, $path);

        $datalar = $request->all();

        $datalar['slug']    = str_slug($request->title);

        $datalar['image']   = $path.$filename;

        $datalar['botlink'] = str_random();

        Post::create($datalar);
        \Session::flash('create', 'Yeni post/yazı eklendi.');
        return Redirect::route('post.index');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.post.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('admin.post.edit', compact('post', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $post = $request->all();

        if($request->mevcut_foto === null and $request->image === null){

            unset($post->mevcut_foto);
            $post['image'] = asset('pa/HTML/assets/images/patterns/linen.flaticon');
        }
        elseif($request->image === null){

           $post['image'] = $request->mevcut_foto;
            unset($post['mevcut-foto']);
        }else{

            //Klasör adı yıl ve ay birleşimi olacak Örn: 201709 gibi
            $dt = Carbon::parse(Carbon::now());

            /**
             * Her ay için resimlerin ayrı saklanacağı klasör oluşturulacak
             * Aynı isimde klasör varsa işlem yapılmayacak
             */
            $folderCreate = Helper::folderCreate($dt->year.$dt->month,'images/post/',0755,true,true);

            if($folderCreate == 'hata'){
                return Redirect::back();
            }

            $path = 'images/post/'.$dt->year.$dt->month.'/';

            $imgName = Helper::imgFileNameGenerator($request,'updated');

            $imgFileName = Helper::imgSave($request,$imgName,'image',600,400,$path);

            if($imgFileName != false){
                $post['image'] = $path.$imgFileName;
            }

        }

        $post['slug'] = str_slug($request->title);

        Post::findOrFail($id)->update($post);

        return Redirect::route('post.index');
    }

    public function destroy($id)
    {
        $makale = Post::findOrFail($id);
        $makale->delete();
        return Redirect::route('post.index');
    }

}
