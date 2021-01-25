<?php

namespace App\Providers;

use App\Product;
use App\ProductType as AppProductType;
use Illuminate\Support\ServiceProvider;
use App\ProductType;
use App\Cart;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Session;

use Symfony\Component\HttpFoundation\Session\SessionUtils;

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
        view()->composer('header', function($view){
            $loai_sp = ProductType::all();
            $view->with('loai_sp', $loai_sp);
        });

        view()->composer(['header','page.dat_hang'], function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with([
                'cart'=>Session::get('cart'),
                'product_cart'=>$cart->items,
                'totalPrice'=>$cart->totalPrice, 
                'totalQty'=>$cart->totalQty
                ]);
            }
        });
    }
}
