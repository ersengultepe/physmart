<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => 'manage', 'middleware' => 'auth'], function () {

    Route::get('/', ['as' => 'dashboard' , function (){

//        $analytic = new GoogleAnalyticsController();
//        $browser = $analytic->browserDataset();
//        $lastThisWeek = $analytic->lastThisWeekDataset();
//
//        $say = 0;
//        foreach ($lastThisWeek as $k=>$v){
//
//            if($say<7){
//                $lastWeek[(int)$k] = $v;
//            }else{
//                break;
//            }
//
//            $say++;
//        }
//
//        $thisWeek = [];
//        $say1 = 0;
//        foreach ($lastThisWeek as $k=>$v){
//
//            if($say1>6){
//                $thisWeek[(int)$k-7] = $v;
//            }
//
//            $say1++;
//        }
//
//         $thisWeek = array_reverse($thisWeek);
//        $lastWeek = array_reverse($lastWeek);

//        return view('admin.index', compact('browser', 'lastWeek', 'thisWeek'));

        $haberCount = 12;
        $egitimCount = 13;
        $makaleCount = 14;

        return view('admin.index', compact('haberCount', 'egitimCount', 'makaleCount'));

    }]);

    Route::get('embed', 'GoogleAnalyticsController@embed');

    Route::resource('post', 'PostController');
    Route::resource('category', 'CategoryController', ['except' => 'show']);
    Route::resource('admin', 'AdminController');

    //Log kayıtları görüntüleme
    Route::get('logs', ['as' => 'logs', 'uses' => '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index']);
});

Route::get('/', function (){
    return view('construction');
});

Route::group(['prefix' => 'dev', 'middleware' => 'auth'], function () {
    Route::get('/', function (){
        return view('frontend.main.index')->name('index');
    });

    Route::get('cikis', function (){
        Auth::logout();
        return redirect('/');
    });

    Route::get('hakkimizda', function (){
        return view('frontend.hakkimizda.index');
    });

    Route::get('contact', function (){
        return view('frontend.pages.contact');
    })->name('contact');

});


Route::auth();


Auth::routes();
