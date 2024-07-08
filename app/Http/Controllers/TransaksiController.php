<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\area_palkir;
use App\Models\kendaraan;
use App\Models\transaksi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class TransaksiController extends Controller
{
    public function show()
    {
        $list_transaksi = transaksi::with('area_palkir')->get();
        $list_transaksi = transaksi::with('kendaraan')->get();
        
        return view('transaksi.show', ['list_transaksi' => $list_transaksi]);
    }
    public $timestamps = false;

    public function create()
    {
        $objtransaksi = new transaksi();
        $list_kendaraan = kendaraan::all();
        $list_area_palkir = area_palkir::all();
        return view('transaksi.form', ['transaksi' => $objtransaksi, 'list_kendaraan' => $list_kendaraan, 'list_area_palkir'=>$list_area_palkir]);
    }



    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'mulai' => 'required',
            'akhir' => 'required',
            'keterangan' => 'required',
            'biaya' => 'required',
            'kendaraan_id' => 'required',
            'area_palkir_id' => 'required',
        
        ]);
        if ($request->id) {
            transaksi::find($request->id)->update($request->all());
            return redirect(route('transaksi.show'))->with('pesan', 'Data berhasil diupdate');
        } else {
            transaksi::create($request->all());
            return redirect(route('transaksi.show'))->with('pesan', 'Data berhasil disimpan');
        }
    }
    public function detail($id)
    {
        $transaksi = transaksi::find($id);
        return view('transaksi.detail', ['transaksi' => $transaksi]);
    }
    public function edit($id)
    {
        $transaksi = transaksi::find($id);
        $list_kendaraan = kendaraan::all();
        $list_area_palkir = area_palkir::all();
        return view('transaksi.form', ['transaksi' => $transaksi, 'list_kendaraan' => $list_kendaraan, 'list_area_palkir'=>$list_area_palkir]);
    }

    public function destroy($id): RedirectResponse
    {
        transaksi::find($id)->delete();
        return redirect(route('transaksi.show'))->with('pesan', 'Data berhasil diHapus');
    }
}
