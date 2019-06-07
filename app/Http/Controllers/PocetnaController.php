<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uzorak;

class PocetnaController extends Controller
{
    public function index(){

        $uzorci = Uzorak::all();
       // $uzorci = Uzorak::orderBy('created_at');
        return view('pocetna.welcome')->with('uzorci', $uzorci);
    }

    public function create(){
        return view('pocetna.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'naziv' => 'required|string|min:3|max:100',
            'vreme_prikupljanja' => 'required|numeric|min:1',
            'sirina' => 'required',
            'visina' => 'required',
            'status' => 'required'
        ]);

        $uzorak = new Uzorak;
        $uzorak->naziv = $request->input('naziv');
        $uzorak->vreme_prikupljanja = $request->input('vreme_prikupljanja');
        $uzorak->sirina = $request->input('sirina');
        $uzorak->visina = $request->input('visina');
        $uzorak->status = $request->input('status');

        $uzorak->save();

        return redirect('/')->with('success', 'Uspesno dodat uzorak');
    }

    public function edit($id){
        $uzorak = Uzorak::find($id);

        return view('pocetna.edit')->with('uzorak', $uzorak);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'naziv' => 'required|string|min:3|max:100',
            'vreme_prikupljanja' => 'required|numeric|min:1',
            'sirina' => 'required',
            'visina' => 'required',
            'status' => 'required'
        ]);

        $uzorak = Uzorak::find($id);
        $uzorak->naziv = $request->input('naziv');
        $uzorak->vreme_prikupljanja = $request->input('vreme_prikupljanja');
        $uzorak->sirina = $request->input('sirina');
        $uzorak->visina = $request->input('visina');
        $uzorak->status = $request->input('status');

        $uzorak->save();

        return redirect('/')->with('success', 'Uspesno izmenjen uzorak');

    }

    public function destroy($id){
        $uzorak = Uzorak::find($id);
        $uzorak->delete();

        return redirect('/')->with('success', 'Uspesno izbrisan uzorak');
    }

}
