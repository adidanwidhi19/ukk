<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    public function index()
    {
        $barangs = Barang::paginate(10);
        return view('barang.index', compact('barangs'));

        $query = Barang::query(); // Ambil semua data Barang

    // Jika ada input pencarian, filter data
    if ($request->has('search')) {
        $search = $request->search;
        $query->where('nama_barang', 'like', "%$search%")
              ->orWhere('stok', 'like', "%$search%");
    }

    $barang = $query->paginate(10); // Tetap gunakan pagination

    return view('barang.index', compact('barang'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|',
            'stok' => 'required|integer|min:0',
            'harga' => 'required|integer|min:0',
        ]);

        Barang::create([
            'nama_barang' => $request->nama_barang,
            'stok' => $request->stok,
            'harga' => $request->harga,
        ]);

        return redirect()->route('barang.index')->with(['success' => 'data berhasil ditambahkan']);
    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'stok' => 'integer|min:0',
            'harga' => 'integer|min:0'
        ]);
        $barang = Barang::findOrFail($id);
        $barang->update([
            'nama_barang' => $request->nama_barang,
            'stok' => $request->stok,
            'harga' => $request->harga,
        ]);

        return redirect()->route('barang.index')->with(['success' => 'data berhasil dirubah']);
    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        return redirect()->route('barang.index')->with(['success' => 'data berhasil dihapus']);
    }
}