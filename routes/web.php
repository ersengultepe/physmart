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

use App\Egitim;
use App\Haber;
use App\Http\Controllers\BlogController;
use App\Post;

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

        $haberCount = Haber::all()->count();
        $egitimCount = Egitim::all()->count();
        $makaleCount = Post::all()->count();

        return view('admin.index', compact('haberCount', 'egitimCount', 'makaleCount'));

    }]);

    Route::get('embed', 'GoogleAnalyticsController@embed');

    Route::get('mesajlar', ['as' =>'inbox' ,'uses' => 'MesajlarController@index']);

    Route::resource('post', 'PostController');
    Route::resource('category', 'CategoryController', ['except' => 'show']);
    Route::resource('haber', 'HaberController');
    Route::resource('egitim', 'EgitimController');
    Route::resource('hizmet', 'HizmetController');
    Route::resource('sirku', 'SirkuController');
    Route::resource('admin', 'AdminController');

    Route::get('haber/tosirku/{id}', ['as' => 'tosirku', 'uses' => 'HaberController@tosirku']);

    //Log kayıtları görüntüleme
    Route::get('logs', ['as' => 'logs', 'uses' => '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index']);
});

Route::get('/', function (){
    return view('construction');
});

Route::group(['prefix' => 'dev', 'middleware' => 'auth'], function () {
    Route::get('/', function (){
        return view('frontend.main.index');
    });

    Route::get('cikis', function (){
        Auth::logout();
        return redirect('/');
    });

    Route::get('hakkimizda', function (){
        return view('frontend.hakkimizda.index');
    });

    Route::get('hizmet', function (){
        return view('frontend.hizmet.index')->with('breadCrumb', 'HİZMETLERİMİZ');
    });

    Route::get('contact', function (){
        return view('frontend.pages.contact');
    })->name('contact');

    Route::get('egitim', function (){
        $egitim = new BlogController();
        return $egitim->egitim();
    });

    Route::get('haber', function () {

        $link = Haber::first();

        $haber = new BlogController();

        return $haber->haberKategori($link->getCategory->slug);

    });

//Haberlere erişim rotası
    Route::get('haber/{link?}', 'BlogController@haber');

//Şirket yöneticileri profil sayfasına erişim rotaları
    Route::get('personel/{link}', ['as'=>'personel', 'uses'=>'BlogController@personel']);

//Hizmetlere erişim rotaları
    Route::get('hizmet/{link}', ['as'=>'hizmet', 'uses'=>'BlogController@hizmet']);

//Eğitimlere erişim rotaları
//Route::get('egitim/{link?}', ['as'=>'egitim', 'uses'=>'BlogController@egitim']);

//Sirkülere erişim rotaları
    Route::get('sirku/{link?}', ['as'=>'sirku', 'uses'=>'BlogController@sirku']);

//Makalelere erişim rotaları
    Route::get('makale/{link?}', ['as' => 'makale', 'uses' => 'BlogController@makale']);

//Haber kategorileri erişim rotaları
    Route::get('/kategori/haber/{link}', ['as' => 'haberKategori', 'uses' => 'BlogController@haberKategori']);

//Sirkü kategorileri erişim rotaları
    Route::get('/kategori/sirku/{link}', ['as' => 'sirkuKategori', 'uses' => 'BlogController@sirkuKategori']);

//Sirkü kategorileri erişim rotaları
    Route::get('/kategori/makale/{link}', ['as' => 'makaleKategori', 'uses' => 'BlogController@makaleKategori']);

//Alo Maliye Botu
    Route::get('alomaliye', 'BlogController@aloMaliye');

    Route::post('mesaj_gonder', ['as'=>'mesaj', 'uses'=>'MesajlarController@kaydet']);

});


Route::auth();


Auth::routes();
