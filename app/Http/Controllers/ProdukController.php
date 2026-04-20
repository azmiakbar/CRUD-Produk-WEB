<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::all();
        return view('produk.index', compact('data'));
    }

    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        Produk::create($request->except('_token'));
        return redirect()->route('produk.index');
    }

    public function show(Produk $produk)
    {
        //
    }

    public function edit($id)
    {
    $data = Produk::find($id);
    return view('produk.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
    $data = Produk::find($id);

    $data->update([
        'nama_produk' => $request->nama_produk,
        'harga' => $request->harga,
        'stok' => $request->stok
    ]);

    return redirect()->route('produk.index');
    }

    public function destroy($id)
    {
    $data = Produk::find($id);
    $data->delete();

    return redirect()->route('produk.index');
    }
}