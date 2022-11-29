<?php

namespace App\Http\Controllers;

use App\Models\CartModel;
use App\Http\Requests\StoreCartModelRequest;
use App\Http\Requests\UpdateCartModelRequest;

class CartModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCartModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCartModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CartModel  $cartModel
     * @return \Illuminate\Http\Response
     */
    public function show(CartModel $cartModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CartModel  $cartModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CartModel $cartModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCartModelRequest  $request
     * @param  \App\Models\CartModel  $cartModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCartModelRequest $request, CartModel $cartModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CartModel  $cartModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CartModel $cartModel)
    {
        //
    }
}
