<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\CartModel;
use App\Models\Produk;
use App\Models\simpanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        return view('contents.user.dashboard', [
            'isi' => Order::where('userid', $id)->get()
        ]);
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
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        $simpanan = new simpanan();
        $id = Auth::user()->id;
        $carts = CartModel::where('userid', $id)->get();
        $simpanan->userid = Auth::user()->id;
        dd($carts);
        $produk = implode('|', $carts->nama_produk);
        $harga = implode('|', $carts->harga);
        $jumlah = implode('|', $carts->jumlah);
        $simpanan->produk = $produk;
        $simpanan->harga = $harga;
        $simpanan->jumlah = $jumlah;

        /* $simpanan->save();
        return redirect('/user/order'); */
    }

    public function order(Request $request) {
        $id = Auth::user()->id;
        $cart = CartModel::where('userid', $id)->get();
        $simpanan = simpanan::all();
        $order = new Order();
            $order->userid = Auth::user()->id;
            $order->nama = $request->nama;
            $order->alamat = $request->alamat;
            foreach ($simpanan as $simpan) {
                $order->produk = explode('|', $simpan->produk);
            }
            $order->nomor_telpon = $request->nomor_telpon;
            foreach ($cart as $carts){
            $order->total = $carts->harga*$carts->jumlah;
            }
            $order->metode = strtolower($request->metode);
            $order->status = 'Diproses';
            $order->save();
            DB::table('simpanan')->delete();
            DB::table('cart')->delete();
            return redirect('/');

            /* dd($request->all()); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $id = Auth::user()->id;
        return view('contents.user.order', [
            'isi' => CartModel::where('userid', $id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
