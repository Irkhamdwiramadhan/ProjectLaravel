<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\area_palkir;
use App\Models\kampus;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Area_palkirController extends Controller
{
    public function show()
    {
        $list_area_palkir = area_palkir::with('kampus')->get();

        return view('area_palkir.show',  [
            'list_area_palkir' => $list_area_palkir
        ]);
    }

    public $timestamps = false;

    public function create()
    {
        $objarea_palkir = new area_palkir();
        $list_kampus = kampus::all();
        return view('area_palkir.form', ['area_palkir' => $objarea_palkir, 'list_kampus' => $list_kampus]);
    }



    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kapasitas' => 'required',
            'keterangan' => 'required',
            'kampus_id' => 'required',
            
        ]);

        if ($request->id) {
            area_palkir::find($request->id)->update($request->all());
            return redirect(route('area_palkir.show'))->with('pesan', 'Data berhasil diupdate');
        } else {
            area_palkir::create($request->all());
            return redirect(route('area_palkir.show'))->with('pesan', 'Data berhasil disimpan');
        }
    }
    public function detail($id)
    {
        $area_palkir = area_palkir::find($id);
        return view('area_palkir.detail', ['area_palkir' => $area_palkir]);
    }
    public function edit($id)
    {
        $area_palkir = area_palkir::find($id);
        $list_kampus = kampus::all();
        return view('area_palkir.form', ['area_palkir' => $area_palkir, 'list_kampus'=>$list_kampus]);
    }

    public function destroy($id): RedirectResponse
    {
        area_palkir::find($id)->delete();
        return redirect(route('area_palkir.show'));
    }
}


