<?php

namespace App\Http\Controllers\Admin;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bukus = Buku::with('kategori')->get();
        return view('admin.buku.index', (['bukus' => $bukus]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('admin.buku.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'id_kategori' => 'required',
        //     'judul' => 'required|string|max:255',
        //     'pengarang' => 'required|string|max:100',
        //     'tahun_terbit' => 'nullable|digits:4|integer|min:1900|max:' . (date('Y') + 1),
        //     'deskripsi' => 'nullable|string',
        //     'stok' => 'required|integer|min:0',
        //     'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        // ]);

        // $data = $request->all();

        // if ($request->hasFile('cover')) {
        //     $imageName = time() . '.' . $request->cover->extension();
        //     $request->cover->storeAs('public/buku', $imageName);
        //     $data['cover'] = $imageName;
        // }

        // Buku::create($data);

        // return redirect()->route('buku.index')
        //     ->with('success', 'Buku berhasil ditambahkan!');

        try {
            $file = $request->file('cover');

            // Generate unique filename
            $filename = Str::random(20) . '_' . time() . '.' . $file->getClientOriginalExtension();
            $filepath = 'buku/' . $filename;

            // Store file in public disk
            Storage::disk('public')->put($filepath, file_get_contents($file));

            // Save file info to database
            Buku::create([
                'id_kategori' => $request->id_kategori,
                'judul' => $request->judul,
                'pengarang' => $request->pengarang,

                'tahun_terbit' => $request->tahun_terbit,
                'dekripsi' => $request->deskripsi,
                'stok' => $request->stok,
                'cover' => $filename,
            ]);

            return redirect()->route('buku.index')->with('success', 'File berhasil diupload!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal mengupload file: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $buku = Buku::with('kategori')->findOrFail($id);
        return view('admin.buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        $kategoris = Kategori::all();
        return view('admin.buku.edit', compact('buku', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        // dd($request->all());
        $request->validate([
            'id_kategori' => 'required',
            'judul' => 'required|string|max:255',
            'pengarang' => 'required|string|max:100',

            'tahun_terbit' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
            'deskripsi' => 'nullable',
            'stok' => 'required|integer|min:0',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('cover')) {
            // Hapus gambar lama jika ada (gunakan disk 'public' dan path 'buku/')
            if ($buku->cover) {
                Storage::disk('public')->delete('buku/' . $buku->cover);
            }

            $file = $request->file('cover');
            $imageName = time() . '.' . $file->extension();
            $publicPath = 'buku/' . $imageName;
            Storage::disk('public')->put($publicPath, file_get_contents($file));
            $data['cover'] = $imageName;
        }

        $buku->update($data);

        return redirect()->route('buku.index')
            ->with('success', 'Buku berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        // Delete cover from the public disk if exists
        $buku = Buku::findOrFail($id);

        if ($buku->cover) {
            Storage::disk('public')->delete('buku/' . $buku->cover);
        }

        $buku->delete();

        return redirect()->route('buku.index')
            ->with('success', 'Buku berhasil dihapus!');
    }
}
