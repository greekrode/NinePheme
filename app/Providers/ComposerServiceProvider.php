<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Auth;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        // view()->composer(
        //     'header', 'App\Http\ViewComposers\HeaderComposer'
        // );

        view()->composer('*', function ($view)
        {
            if (Auth::check()){
                $name = Auth::user()->name;
                $id = Auth::user()->id;
                $view->with('name', $name);
                $view->with('id', $id);
            }
        });

        // if (Auth::check()){
        //     $name = Auth::user()->name;
        //     view()->with('name', $name);
        // }
        // view()->with('name', $name);

        
        // Using Closure based composers...
        // view()->composer('dashboard', function ($view) {

        // });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}