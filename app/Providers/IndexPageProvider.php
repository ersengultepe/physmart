<?php

namespace App\Providers;

use App\Haber;
use App\Sirku;
use App\Post;
use App\Egitim;
use Illuminate\Support\ServiceProvider;

class IndexPageProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('frontend.index.index', function($view){

                $egitimler  = Egitim::where('publish', 1)->orderBy('id', 'desc')->take(3)->get();
                $makaleler  = Post::where('publish', 1)->orderBy('id', 'desc')->take(3)->get();
                $sirkuler   = Sirku::where('publish', 1)->orderBy('id', 'desc')->take(4)->get();
                $haberler   = Haber::where('publish', 1)->orderBy('id', 'desc')->take(6)->get();

                $view->with(['makaleler' => $makaleler, 'egitimler' => $egitimler, 'sirkuler' => $sirkuler, 'haberler' => $haberler]);

        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
