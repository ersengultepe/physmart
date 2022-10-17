<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminStoreRequest;
use App\Http\Requests\AdminUpdateRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('status', 1)->orderBy('name')->get();
        return view('admin.admin.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $imgName = str_slug($request->name.'-'.$request->surname).'-'.str_random(6);

        $path = 'images/users/';

        $fileName = Helper::imgSave($request,$imgName, 'image',250,250, $path );

        $req = $request->all();

        $req['image'] = 'images/users/'.$fileName;

        $req['slug'] = str_slug($request->name.' '.$request->surname);

        $req['password'] = bcrypt($request->password);

        User::create($req);

        return Redirect::route('admin.index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if($request->tur == 'pass'){
            return view('admin.admin.edit-password', compact('user'));
        }else{
            return view('admin.admin.edit-profile', compact('user'));
        }

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
        $user           =   User::findOrFail($id);

        if($request->updatetur !== 'pass' ){
                $formData       =   $request->all();

                if($request->file('image') !== null){

                    $imgName    = str_slug($request->name.'-'.$request->surname).'-'.str_random(6);

                    $path       = 'images/users/';

                    $fileName   = Helper::imgSave($request,$imgName, 'image',250,250, $path );

                    $formData['image'] = 'images/users/'.$fileName;

                    unset($formData['mevcut_foto']);

                }else{

                    $formData['image'] = $formData['mevcut_foto'];
                    unset($formData['mevcut_foto']);

                }

                $formData['slug'] = str_slug($request->title);

                $user->update($formData);

                return Redirect::route('admin.index');
            }else{

                if(Hash::check($request->password, $user->password)){

                    $ekle = new User();
                    $ekle->password = bcrypt($request->password);
                    $ekle->saveOrFail();
                    Log::alert($user->name.' '.$user->surname.' isimli kullanıcı şifresini güncelledi');

                    return Redirect::route('admin.index');
                }else{
                    return "pass eşleşmedi";
                }
            }
    }

    public function show()
    {
        return "show";
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return Redirect::route('admin.index');
    }



}


