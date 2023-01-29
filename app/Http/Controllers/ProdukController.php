<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Http\Requests\StoreProdukRequest;
use Illuminate\Http\Requests;
use App\Http\Requests\UpdateProdukRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Exists;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contents.user.products', [
            "title" => "Product",
            "isi" => Produk::all()
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
     * @param  \App\Http\Requests\StoreProdukRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'harga' => 'required|integer',
            'detail' => 'required|string',
            'stok' => 'required|integer',
            'image' => 'required'
        ]);
        $image = array();
        if ($files = $request->file('image')) {
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_fullname = $image_name . '.' . $ext;
                $upload_path = 'public/foto_produk/';
                $img_url = $image_fullname;
                $file->move($upload_path, $image_fullname);
                $image[] = $img_url;
            }
        };
        Produk::insert([
            'nama' => $request->nama,
            'detail' => $request->detail,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'image' => $img_url /* implode('|', $image) */
        ]);
        return redirect('/admin');
    }

    public function tambah()
    {
        return view('contents.admin.tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('contents.user.detail', [
            'isi' => Produk::where('id', $id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('contents.admin.edit', [
            'produk' => Produk::where('id', $id)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProdukRequest  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $produk = Produk::find($id);
        if ($request->file() == null) {
            Produk::where('id',$id)->update([
                'nama' => $request->nama,
                'detail' => $request->detail,
                'harga' => $request->harga,
                'stok' => $request->stok
            ]);
        }
        if ($request->file() != null) {
            $file = $request->image;
            $image_name = md5(rand(1000, 10000)).'.'.$file->getClientOriginalExtension();
            $path = 'public/foto_produk/';
            if ($produk->image == $image_name) {
                $file_old = $produk->image;
                unlink($path.$file_old);
            }
            $file->move($path, $image_name);
            Produk::where('id',$id)->update([
                'nama' => $request->nama,
                'detail' => $request->detail,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'image' => $image_name
            ]);
        }
        return redirect('/admin')->with('status', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk, $id)
    {
        Produk::find($id)->delete();
        return redirect()->back();
    }

    public function slug($id){
        return view('contents.user.detail', [
            'isi' => Produk::where('id', $id)->get()
        ]);
    }
}
