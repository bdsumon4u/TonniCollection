<?php

namespace Modules\Cart\Http\Controllers;

use WebLAgence\LaravelFacebookPixel\LaravelFacebookPixelFacade;

class CartController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        LaravelFacebookPixelFacade::createEvent('AddToCart');
        return view('public.cart.index');
    }
}
