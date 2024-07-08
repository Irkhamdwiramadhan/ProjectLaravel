<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\kendaraan;
use App\Models\jenis;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function show()
    {
        $list_kendaraan = kendaraan::with('jenis_kendaraan')->get();
        return view('kendaraan.show', ['list_kendaraan' => $list_kendaraan]);
    }

    public function register(Request $request)
{
    $request->validate([
        'merk' => 'required',
        'pemilik' => 'required',
        'nopol' => 'required',
        'thn_beli' => 'required',
        'deskripsi' => 'required',
        'jenis_kendaraan_id' => 'required',
        'kapasitas_kursi' => 'required',
        'rating' => 'required',
    ]);

    kendaraan::create($request->all());
    return redirect('/')->with('pesan', 'Kendaraan berhasil didaftarkan');
}

    public $timestamps = false;

    public function create()
    {
        $objkendaraan = new kendaraan();
        $list_jenis = jenis::all();
        return view('kendaraan.form', ['kendaraan' => $objkendaraan, 'list_jenis' => $list_jenis]);
    }



    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required',
            'pemilik' => 'required',
            'nopol' => 'required',
            'thn_beli' => 'required',
            'deskripsi' => 'required',
            'jenis_kendaraan_id' => 'required',
            'kapasitas_kursi' => 'required',
            'rating' => 'required',
        ]);

        if ($request->id) {
            kendaraan::find($request->id)->update($request->all());
            return redirect(route('kendaraan.show'))->with('pesan', 'Data berhasil diupdate');
        } else {
            kendaraan::create($request->all());
            return redirect(route('kendaraan.show'))->with('pesan', 'Data berhasil disimpan');
        }
    }
    public function detail($id)
    {
        $kendaraan = kendaraan::find($id);
        return view('kendaraan.detail', ['kendaraan' => $kendaraan]);
    }
    public function edit($id)
    {
        $kendaraan = kendaraan::find($id);
        $list_jenis = jenis::all();
        return view('kendaraan.form', ['kendaraan' => $kendaraan, 'list_jenis'=>$list_jenis]);
    }

    public function destroy($id): RedirectResponse
    {
        kendaraan::find($id)->delete();
        return redirect(route('kendaraan.show'))->with('pesan', 'Data berhasil diHapus');
    }
}
