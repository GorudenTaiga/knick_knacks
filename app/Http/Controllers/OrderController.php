<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\CartModel;
use App\Models\Produk;
use App\Models\simpanan;
use App\Models\User;
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
        $user = Auth::user();
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
            }
            foreach ($simpanan as $s){
                $total = $s->harga*$s->jumlah;
            }
            $order = new Order();
            $order->userid = Auth::user()->id;
            if (Auth::user()) {
                $order->nama = $user->fullname;
                $nama = $user->fullname;
                $order->alamat = $user->alamat;
                $order->nomor_telpon = $user->phonenumber;
            }
            else {
                $order->nama = $request->nama;
                $nama = $request->nama;
                $order->alamat = $request->alamat;
                $order->nomor_telpon = $request->nomor_telpon;
            }
            foreach ($simpanan as $simpan) {
                $nama_prdk = $simpan->produk;
                $order->produk = $simpan->produk;
            }
            $order->jumlah = $c->jumlah;
            $jumlah = $c->jumlah;
            $order->total = $total;
            $order->metode = strtolower($request->metode);
            $order->status = 'Diproses';
            $order->save();
        }
        DB::table('simpanan')->delete();
        DB::table('cart')->delete();
        if ($request->metode == "Whatsapp") {
            $pesan = "Hai,... Saya $nama ingin membayar produk $nama_prdk sejumlah $jumlah dengan total harga $total,... Terima kasih";
            return redirect('https://api.whatsapp.com/send/?phone=6289671947676&text='.$pesan.'&type=phone_number&app_absent=0');
        }
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
            $jumlah = $s->jumlah;
        }
        return view('contents.user.order', [
            'isi' => CartModel::where('userid', $id)->get(),
            'jumlah' => $jumlah,
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