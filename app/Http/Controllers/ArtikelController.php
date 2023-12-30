<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\artikel;
use App\Models\User;
use Illuminate\Support\Facades\Storage;


class ArtikelController extends Controller
{
       public function indexcl()
    {
        
        $data = artikel::all();

        return view('admin', ['data' => $data]);
    }

    public function tambahArtikel()
    {
        $data = null; 
        return view('tambahartikel', compact('data'));
    }

    public function simpanArtikel(Request $request)
    {
    $request->validate([
        'judul' => 'required',
        'nama_pen' => 'required',
        'tanggal' => 'required|date',
        'isi' => 'required',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'status' => 'required|in:publish,draft',
    ]);

    $gambar = $request->file('gambar')->store('images', 'public');

    $user = User::where('email', 'adminjwp@gmail.com')->first();

    $artikel = artikel::create([
    'user_id' => $user->id_users,
    'judul' => $request->judul,
    'nama_pen' => $request->nama_pen,
    'tanggal' => $request->tanggal,
    'isi' => $request->isi,
    'gambar' => $gambar,
    'status' => $request->status,   
    ]);

    return redirect()->route('admin', $artikel->id_artikel);

    }

    public function delete($id_artikel)
    {
        $data = artikel::find($id_artikel);
        $data->delete();
        return redirect()->route('admin')->with('success', 'Artikel berhasil dihapus');
    }

    public function tampilkanartikel($id_artikel)
    {
        $data = artikel::find($id_artikel);
        return view('edit', compact('data'));
    }

    public function updateArtikel(Request $request, $id_artikel)
    {
    $data = artikel::find($id_artikel);

    $request->validate([
        'judul' => 'required',
        'nama_pen' => 'required',
        'tanggal' => 'required|date',
        'isi' => 'required',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'status' => 'required|in:publish,draft',
    ]);

    if ($request->hasFile('gambar')) {
        Storage::delete('public/' . $data->gambar);
        $gambar = $request->file('gambar')->store('images', 'public');
        $data->gambar = $gambar;
    }

    $user = User::where('email', 'adminjwp@gmail.com')->first();
    $data->user_id = $user->id_users;
    $data->judul = $request->judul;
    $data->nama_pen = $request->nama_pen;
    $data->tanggal = $request->tanggal;
    $data->isi = $request->isi;
    $data->status = $request->status;

    $data->save();

    return redirect()->route('admin')->with('success', 'Artikel berhasil diupdate');
    }

    public function artikel()
    {
        $data = artikel::orderBy('tanggal')->get();
        return view('welcome', compact('data'));
    }

    public function detail($id_artikel)
    {
        $data = artikel::find($id_artikel);
        return view('detail', compact('data'));
    }

}