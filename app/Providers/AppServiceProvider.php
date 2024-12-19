<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Session;
use App\Models\Cart;
use App\Models\Slide;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */

    protected $table='user';
    protected $fillable=[
    'email','password',
    ];

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
        view()->composer('users.header',function($view){
            $loai_sp = Category::all();
            $slide=Slide::orderBy('id','asc')->get();
            $view->with('loai_sp',$loai_sp,'slide',$slide);
        });

        view()->composer('users.slideshow',function($view){
            $slide=Slide::all();
            $view->with('slide',$slide);
        });

        view()->composer(['users.header','users.page.giohang','users.page.dat_hang'],function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'), 'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
            }
        });
        Schema::defaultStringLength(191);
    }
}
