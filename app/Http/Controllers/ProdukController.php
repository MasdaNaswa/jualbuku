<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk; // Change from Product to Produk
use DataTables;
use File;
use Response;

class ProdukController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            return DataTables::of(Produk::select('*')) // Change from Product to Produk
                ->addColumn('aksi', 'produk.produk-aksi') // Assuming you have a view file in 'produk' folder
                ->addColumn('judul_buku', function($row) {
                    return $row->judul_buku; // Use correct attribute name
                })
                ->addColumn('nama_kategori', function($row) {
                    return $row->nama_kategori; // Use correct attribute name
                })
                ->addColumn('harga', function($row) {
                    return $row->harga; // Use correct attribute name
                })
                ->addColumn('gambar_buku', function($row) {
                    $image = asset("public/product/{$row->gambar_buku}");
                    return '<img src="' . $image . '" />';
                })
                ->rawColumns(['aksi', 'gambar_buku'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('produk.home');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar_buku' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul_buku' => 'required',
            'nama_kategori' => 'required',
            'harga' => 'required|numeric',
        ]);

        $productId = $request->product_id;
        $image = $request->hidden_image;

        if ($files = $request->file('image')) {
            // Delete old file if exists
            if ($request->hidden_image && File::exists('public/product/' . $request->hidden_image)) {
                File::delete('public/product/' . $request->hidden_image);
            }

            // Store new file
            $destinationPath = 'public/product/';
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $image = $profileImage;
        }

        $product = Produk::find($productId) ?? new Produk(); // Change from Product to Produk
        // Set attributes
        $product->judul_buku = $request->judul_buku;
        $product->nama_kategori = $request->nama_kategori;
        $product->harga = $request->harga;
        $product->gambar_buku = $image; // Correct variable name

        // Save the product
        $product->save();

        return response()->json($product);
    }

    public function edit($id)
    {
        $product = Produk::find($id); // Change from Product to Produk
        return Response::json($product);
    }

    public function destroy($id)
    {
        $product = Produk::find($id); // Change from Product to Produk

        if ($product) {
            // Delete product image
            if ($product->gambar_buku && File::exists('public/product/' . $product->gambar_buku)) {
                File::delete('public/product/' . $product->gambar_buku);
            }

            // Delete product record
            $product->delete();

            return Response::json(['success' => 'Produk deleted successfully.']); // Change success message
        }

        return Response::json(['error' => 'Produk not found.'], 404); // Change error message
    }
}
