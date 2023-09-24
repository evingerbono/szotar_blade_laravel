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
            return redirect('/szavak/list')->with('error', 'Szavak not found');
        }
    
        $szavak->delete();
    
        return redirect('/szavak/list');
    }
    
    public function store(Request $request)
    {
        $kategoria = new Szavak();
        $kategoria->tema_id = $request->tema_id;
        $kategoria->Angol = $request->Angol;
        $kategoria->Magyar = $request->Magyar;
        $kategoria->save();
        return redirect('/kategoria/list');
    }
    public function update(Request $request, $id)
    {
        $kategoria = Szavak::find($id);
        $kategoria->tema_id = $request->tema_id;
        $kategoria->Angol = $request->Angol;
        $kategoria->Magyar = $request->Magyar;
        $kategoria->save();
        return redirect('/kategoria/list');
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
        $szavak = Szavak::find($id);
        $kategoria = Kategoria::all();

        return view('szavak.delete', ['szavak' => $szavak, 'kategoria' => $kategoria]);
    }


}