<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saint;
class MainController extends Controller
{
    // ritorna home
    public function home(){

        $saints = Saint::orderBy('created_at', 'DESC') ->get();

        $data = [
            "saints" => $saints
        ];
        return view('pages.home', $data);
    }
// cerca saint per id
    public function saint($id){

        $saint = Saint::find($id);
        $data = [
            "saint" => $saint
        ];

        return view('pages.saint', $data);
    }
    // dopo aver cercato il santo per id lo eliminata
    public function delete($id){

        $saint = Saint::find($id);
        $saint -> delete();
       
        return redirect() -> route('saint.home');
    }
// ti porta alla rotta del form
    public function addNew(){

        return view('pages.addnew');
    }
// inserisce i dati inseriti nel form all'interno del db
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
// cancella tutti i dati dal db

    public function saintDelete(){
        
        Saint::truncate();

        return redirect() -> route('saint.home');
    }
}
