<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Datakategori;
class Kategoricontroller extends Controller
{
    public function tampil()
    {
        $data = Datakategori::all();
        return view('tampil', ['data' => $data, 'a' => 1]);
    }
    public function cari(Request $data)
    {
        $data = Datakategori::where('kategori', 'LIKE', '%' . $data->cari . '%')->get();
        return view('tampil', ['data' => $data, 'a' => 1]);
    }
    public function perbahrui()
    {
        $data = Datakategori::all();
        return view('perbahrui', ['data' => $data, 'a' => 1]);
    }
    public function edit($id)
    {
        $data = Datakategori::all();
        $data_edit = Datakategori::where('id', $id)->get();
        return view('perbahrui', ['data' => $data, 'data_edit' => $data_edit, 'a' => 1]);
    }
    public function simpan(Request $data)
    {
        $data_edit = Datakategori::find($data->id);
        $data_edit->kategori = $data->kategori;
        $data_edit->keterangan = $data->keterangan;
        $data_edit->save();
        return redirect('/edit/' . $data->id);
    }
    public function simpand(Request $data)
    {
        Datakategori::create([
            'kategori' => $data->nama,
            'keterangan' => $data->ket
        ]);
        return redirect('/tampil');
    }
    public function detail($id)
    {
        $data = Datakategori::all();
        $data_detail = Datakategori::where('id', $id)->get();
        return view('tampil', ['data' => $data, 'data_detail' => $data_detail, 'a' => 1]);
    }
    public function hapus($id)
    {
        $data = Datakategori::all();
        $data_hapus = Datakategori::where('id', $id)->get();
        return view('perbahrui', ['data' => $data, 'data_hapus' => $data_hapus, 'a' => 1]);
    }
    public function hapusPost(Request $id)
    {
        $hapus = Datakategori::find($id->id);
        $hapus->delete();
        return redirect('/perbahrui');
    }
}
