<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\kampus;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class KampusController extends Controller
{
    public function show(){
        $list_kampus = kampus::all();
        return view('kampus.show',['list_kampus'=>$list_kampus]);
     }
     public $timestamps = false;

    public function create()
    {
        $objkampus = new kampus();
        // $list_kampus =kampus::all();
        return view('kampus.form', ['kampus' => $objkampus]);
    }



    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            
        ]);
        if ($request->id) {
           kampus::find($request->id)->update($request->all());
            return redirect(route('kampus.show'))->with('pesan', 'Data berhasil diupdate');
        } else {
           kampus::create($request->all());
            return redirect(route('kampus.show'))->with('pesan', 'Data berhasil disimpan');
        }
    }

    public function detail($id)
    {
        $kampus =kampus::find($id);
        return view('kampus.detail', ['kampus' => $kampus]);
    }
    public function edit($id)
    {
        $kampus =kampus::find($id);
        return view('kampus.form', ['kampus' => $kampus]);
    }

    public function destroy($id): RedirectResponse
    {
       kampus::find($id)->delete();
        return redirect(route('kampus.show'));
    }
        
}
