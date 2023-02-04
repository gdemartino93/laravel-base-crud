<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saint;
class MainController extends Controller
{
    public function home(){

        $saints = Saint::orderBy('created_at', 'DESC') ->get();

        $data = [
            "saints" => $saints
        ];
        return view('pages.home', $data);
    }

    public function saint($id){

        $saint = Saint::find($id);
        $data = [
            "saint" => $saint
        ];

        return view('pages.saint', $data);
    }
    public function delete($id){

        $saint = Saint::find($id);
        $saint -> delete();
       
        return redirect() -> route('saint.home');
    }

    public function addNew(){

        return view('pages.addnew');
    }
    public function saintStore(Request $request){

        $data = $request -> all();

        $newSaint = new Saint();

        $newSaint -> nome = $data["nome"];
        $newSaint -> luogoDiNascita = $data["luogoDiNascita"];
        $newSaint -> dataDiNascita = $data["dataDiNascita"];
        $newSaint -> numeroDiMiracoli = $data["numeroDiMiracoli"];

        $newSaint -> save();
        return redirect() -> route('saint.home');
    }
}
