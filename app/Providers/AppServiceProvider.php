<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   
        Validator::extend('formato_sopa_letra', function ($attribute, $value, $parameters) {
            $lineas = preg_split("/[\s]+/", $value);
            do{
                $f = array_shift($lineas);
                $c = array_shift($lineas);
                if (($f <= 0 || $f >= 100) || ($c <= 0 || $c >= 100)) {
                    return false;
                    break;
                }else{
                    for ($i=0; $i < $f; $i++) {
                        // print_r('entrando... '. $lineas[$i]); die(); 
                        if (strlen($lineas[$i]) != $c){
                            return false;
                            break;
                        }
                    }
                    for ($i=0; $i < $f; $i++) {
                        array_shift($lineas);
                    }
                }

            }while(count($lineas) > 0);
            return true;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
