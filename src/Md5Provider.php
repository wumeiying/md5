<?php

namespace Wmy\Md5;;

use Illuminate\Support\ServiceProvider;
class Md5Provider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        
        //
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

       //singleton指单列
        //bind每次都需要New一次
        $this->app->bind('md5',function(){
            return new Md5();
        });
    }
}
