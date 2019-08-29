<?php

/*
 * This file is part of the AsyrafHussin/laravel-shopping-cart.
 *
 * (c) 2016 AsyrafHussin <i@AsyrafHussin.me>
 */

namespace AsyrafHussin\LaravelShoppingCart;

use Illuminate\Support\Facades\Facade as LaravelFacade;

/**
 * Facade for Laravel.
 */
class Facade extends LaravelFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Cart::class;
    }
}
