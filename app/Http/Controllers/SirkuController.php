<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\SirkuStoreRequest;
use App\Sirku;
use Illuminate\Http\Request;

use App\Http\Requests;

class SirkuController extends Controller
{
    public function index()
    {
        $sirkuler = Sirku::where('publish', 1)->orderBy('id', 'desc')->get();

        return view('admin.sirku.index', compact('sirkuler'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.sirku.create', compact('categories'));
    }
    
    public function store(SirkuStoreRequest $request)
    {
        $data = $request->all();

        $data['slug'] = str_slug($request->title);

        $data['botlink'] = str_random();

        Sirku::create($data);

        return \Redirect::route('sirku.index');
    }

    public function edit($id)
    {
        $categories = Category::all();

        $sirku = Sirku::findOrFail($id);

        return view('admin.sirku.edit', compact('categories', 'sirku'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = str_slug($request->title);

        $sirku = Sirku::findOrFail($id);

        $sirku->fill($data)->saveOrFail();

        return \Redirect::route('sirku.index');
    }

    public function show($id)
    {
        $sirku = Sirku::findOrFail($id);
        return view('admin.sirku.show', compact('sirku'));
    }

    public function destroy($id)
    {
        $sirku = Sirku::findOrFail($id);

        $sirku->delete();

        return \Redirect::route('sirku.index');
    }

}
