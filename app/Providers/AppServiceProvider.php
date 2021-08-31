<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;


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
        // solucion al momento de hacer migraciones por la version del Maria DB
        Schema::defaultStringLength(191);
        
        //traduciendo las palabras utilizadas en la ruta para hacer los crud
        Route::resourceVerbs([
            'create'=>'crear',
            'edit'=>'editar'
        ]);
    }
}
