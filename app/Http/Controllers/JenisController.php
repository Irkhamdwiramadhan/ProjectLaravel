<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\jenis;
use Illuminate\Http\RedirectResponse;

class JenisController extends Controller


{
    public function show()
    {
        $list_jenis = jenis::all();
        return view('jenis.show', [
            'list_jenis' => $list_jenis
        ]);
    }
    public $timestamps = false;

    public function create()
    {
        $objjenis = new jenis();
        return view('jenis.form', ['jenis' => $objjenis]);
    }

    public function store(Request $request)
    {

        // validasi data inputan
        $request->validate([
            'jenis' => 'required',

        ]);
        if ($request->id) {
            jenis::find($request->id)->update($request->all());
            return redirect(route('jenis.show'))->with('pesan', 'Data berhasil diupdate');
        } else {
            jenis::create($request->all());
            return redirect(route('jenis.show'))->with('pesan', 'Data berhasil disimpan');
        }
    }

    public function detail($id)
    {
        $jenis = jenis::find($id);
        return view('jenis.detail', ['jenis' => $jenis]);
    }
    public function edit($id)
    {
        $jenis = jenis::find($id);
        return view('jenis.form', ['jenis' => $jenis]);
    }

    public function destroy($id): RedirectResponse
    {
        jenis::find($id)->delete();
        return redirect(route('jenis.show'));
    }
}
