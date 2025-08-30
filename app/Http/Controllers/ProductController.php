<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
public function index()
{
    $products = Product::latest()->get();
    return view('product', [
        'products' => $products
    ]);
}


    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product', compact('product'));
    }

    // Opsional kalau mau CRUD di luar Filament:
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:10240',
        ]);

        $path = $request->file('gambar')
            ? $request->file('gambar')->store('service/images', 'public')
            : null;

        Product::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'gambar' => $path,
        ]);

        return back()->with('success', 'Produk berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:10240',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('gambar')) {
            if ($product->gambar && Storage::disk('public')->exists($product->gambar)) {
                Storage::disk('public')->delete($product->gambar);
            }
            $product->gambar = $request->file('gambar')->store('service/images', 'public');
        }

        $product->nama = $request->nama;
        $product->harga = $request->harga;
        $product->save();

        return back()->with('success', 'Produk berhasil diupdate!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->gambar && Storage::disk('public')->exists($product->gambar)) {
            Storage::disk('public')->delete($product->gambar);
        }

        $product->delete();

        return back()->with('success', 'Produk berhasil dihapus!');
    }
}

