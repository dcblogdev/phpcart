<?php
namespace Dcblogdev\Phpcart;

use Illuminate\Support\ServiceProvider;

class CartServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('cart', function() {
            return new \Dcblogdev\Phpcart\Cart;
        });
    }
}
