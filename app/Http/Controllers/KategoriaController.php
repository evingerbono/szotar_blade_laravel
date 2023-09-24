<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategoria;

class KategoriaController extends Controller
{
    //
    public function index()
    {
        $kategoria = response()->json(Kategoria::all());
        return $kategoria;
    }
    public function show($id)
    {
        $kategoria = response()->json(Kategoria::find($id));
        return $kategoria;
    }
    public function destroy($id)
    {
        Kategoria::find($id)->delete();
        return redirect('/kategoria/list');
    }

    public function store(Request $request)
    {
        $kategoria = new Kategoria();
        $kategoria->id = $request->id;
        $kategoria->Elnevezés = $request->Elnevezés;
        $kategoria->save();
        return redirect('/kategoria/list');
    }
    public function update(Request $request, $id)
    {
        $kategoria=Kategoria::find($id);
        $kategoria->id = $request->id;
        $kategoria->Elnevezés = $request->Elnevezés;
        $kategoria->save();
        return redirect('/kategoria/list');
    }

    public function editview ($id){
        $kategoria = Kategoria::find ($id); 
        return view('kategoriak.edit', ['kategoria' => $kategoria]);
    }
    public function listview(){
        $kategoria = Kategoria::all(); 
        return view('kategoriak.list', ['kategoria' => $kategoria]);
    } 
    public function newView(){
        $kategoria = Kategoria::all(); 
        return view ('kategoriak.new', ['kategoria' => $kategoria]); 
    }


}
