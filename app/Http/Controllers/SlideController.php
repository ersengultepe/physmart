<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{

    public function index()
    {
        $slides = Slide::all();
        return view('admin.slide.index', compact('slides'));
    }

    public function create()
    {
        return view('admin.slide.create');
    }

    public function store(Request $request)
    {

        $path = 'images/phy/slides/';

        $pictureFileName = str_random();

        //Öncelikle fotoğrafı kaydedelim
        $filename = Helper::imgSave($request, $pictureFileName,'path',600,400, $path);

        $slide = new Slide();
        $slide->title1 = $request->title1;
        $slide->title2 = $request->title2;
        $slide->title3 = $request->title3;
        $slide->btnTitle = $request->btnTitle;
        $slide->btnHref = $request->btnHref;
        $slide->path = $request->$path.$filename;

        $slide->userId = \Auth::user()->id;
        $slide->save();


        \Session::flash('create', 'Yeni bir slayt eklendi.');
        return \Redirect::route('slide.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
