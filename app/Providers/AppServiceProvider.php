<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\Tag;
use App\Model\Travel;
use App\Model\Detail;
use App\Model\Detailtag;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $allcars = Travel::where('active' ,1)->limit(5)->get();
        $allexps = Tag::where('name', 'Kinh nghiệm')->with('detail')->first();
        $allnews = Detail::where('active', 1)->limit(5)->get();
        $alltags = Tag::all();
        view()->share('alltags', $alltags);
        view()->share('allexps', $allexps);
        view()->share('allcars', $allcars);
        view()->share('allnews', $allnews);
    }
}
