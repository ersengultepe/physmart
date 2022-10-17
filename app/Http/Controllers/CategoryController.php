<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        //Kayıtlı kategoriler listelenecek
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //get category add page
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        //Kategori verileri doğrulamadan geçerse kayıt için buraya düşer
        $data = $request->all();

        $data['slug'] = str_slug($request->title);

        Category::create($data);

        Log::info($request->title.' adında '.$request->id.' id\'li yeni bir KATEGORİ eklendi');

        return Redirect::route('category.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
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
        Category::findOrFail($id)->update([
            'slug'  => str_slug($request->title),
            'title' => $request->title
        ]);

        Log::info($id.' id\'li KATEGORİ güncellendi.' );

        return Redirect::route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $posts = $category->getPosts();

        if($posts->count() > 0){

            session(['kategoriHataMesaji' => $id]);

            return Redirect::route('category.index');

        }else{

            $category->delete();

            Log::warning($category->title.' isimli '.$id.' id numaralı KATEGORİ silindi.');

            return Redirect::route('category.index');
        }
    }
}
