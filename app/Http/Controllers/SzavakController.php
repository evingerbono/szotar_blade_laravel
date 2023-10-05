<?php

namespace App\Http\Controllers;

use App\Models\Kategoria;
use Illuminate\Http\Request;
use App\Models\Szavak;

class SzavakController extends Controller
{
    //
    public function index()
    {
        $szavak = response()->json(Szavak::all());
        return $szavak;
    }
    public function show($id)
    {
        $szavak = response()->json(Szavak::find($id));
        return $szavak;
    }
    public function destroy($id)
    {
        $szavak = Szavak::find($id);
    
        if (!$szavak) {
            return redirect('/api/szavak/list')->with('error', 'Szavak not found');
        }
    
        $szavak->delete();
    
        return redirect('/api/szavak/list');
    }
    
    public function store(Request $request)
    {
        $kategoria = new Szavak();
        $kategoria->tema_id = $request->tema_id;
        $kategoria->Angol = $request->Angol;
        $kategoria->Magyar = $request->Magyar;
        $kategoria->save();
        return redirect('/api/szavak/list');
    }
    public function update(Request $request, $id)
    {
        $kategoria = Szavak::find($id);
        $kategoria->tema_id = $request->tema_id;
        $kategoria->Angol = $request->Angol;
        $kategoria->Magyar = $request->Magyar;
        $kategoria->save();
        return redirect('/api/szavak/list');
    }

    public function editview($id)
    {
        $kategoria = Kategoria::all();
        $szavak = Szavak::find($id);
        return view('szavak.edit', ['kategoria' => $kategoria, 'szavak' => $szavak]);
    }
    public function listview()
    {
        $szavak = Szavak::all();
        return view('szavak.list', ['szavak' => $szavak]);
    }
    public function newview()
    {
        $szavak = Szavak::all();
        return view('szavak.new', ['szavak' => $szavak]);
    }
    public function deleteView($id)
    {
        $szo = Szavak::find($id);
        $kategoria = Kategoria::all();

        return view('szavak.delete', ['szo' => $szo, 'kategoria' => $kategoria]);
    }
    public function listKategoria(Request $request, $kivalasztottId)
    {
        $kivalasztottKateg = Kategoria::find($kivalasztottId);
        $szavak = Szavak::where('tema_id', $kivalasztottId)->get();

        return view('szavak.list', ['szavak' => $szavak, 'kivalaszottKateg' => $kivalasztottKateg]);
    }
    
    public function szoEllenorzes(Request $request, $szoId)
    {
        $szavak = Szavak::find($szoId);
        $magyarSzo = $request->input('Magyar');
        $eredmeny = ($szavak->Magyar == $magyarSzo);
        return $eredmeny;
    }

    
}