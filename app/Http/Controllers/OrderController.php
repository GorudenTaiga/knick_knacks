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
        $jumlah = count($carts);
        for ($i=0; $i < $jumlah; $i++) {
            $simpanan->userid = Auth::user()->id;
            /* foreach ($carts as $cart){
                $simpanan->produk = $cart->nama_produk;
                $simpanan->harga = $cart->harga;
                $simpanan->jumlah = $cart->jumlah;
            } */
            $simpanan->produk = $request->nama_produk;
            $simpanan->harga = $request->harga;
            $simpanan->jumlah = $request->jumlah;
            $simpanan->save();
        }
        return redirect('/user/order');
    }

    public function order(Request $request) {
        $id = Auth::user()->id;
      $cart = CartModel::where('userid', $id)->get();
        $cart = CartModel::where('userid', $id)->get();
        $jumlah = count($cart);
        $simpanan = simpanan::all();
        foreach ($cart as $c){
            $produk = new Produk();
            $product = $produk->where('nama', $c->produk)->get();
        }
        foreach ($simpanan as $c){
            $product = Produk::where('nama', $c->produk)->get();
            foreach ($product as $p){
                foreach ($simpanan as $s) {
                    $stok = $p->stok - $s->jumlah;
                    $p->stok = $stok;
                    $p->save();
                }

                $jumlah = $p->stok - $c->jumlah;
                Produk::where('nama', $c->produk)->update(['stok' => $jumlah]);
            }
        }
        for ($i=0; $i < $jumlah; $i++) {
            foreach ($simpanan as $s){
                $total = $s->harga*$s->jumlah;
            }
            $order = new Order();
            $order->userid = Auth::user()->id;
            $order->nama = $request->nama;
            $order->alamat = $request->alamat;
            foreach ($simpanan as $simpan) {
                $order->produk = $simpan->produk;
            }
            $order->nomor_telpon = $request->nomor_telpon;
            $order->total = $total;
            $order->metode = strtolower($request->metode);
            $order->status = 'Diproses';
            $order->save();
        }
        DB::table('simpanan')->delete();
        DB::table('cart')->delete();
        return redirect('/');
        /* dd($order); */

            /* dd($request->all()); */
}

    /**
     * Display the specified resource.
     *t?WE*     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $id = Auth::user()->id;
        $simpanan = simpanan::where('userid', $id)->get();
        foreach ($simpanan as $s){
            $total = $s->harga*$s->jumlah;
        }
        return view('contents.user.order', [
            'isi' => CartModel::where('userid', $id),
            'total' => $total
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
