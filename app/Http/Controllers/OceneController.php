<?php

namespace App\Http\Controllers;

use App\Models\OceneModel;
use Illuminate\Http\Request;

class OceneController extends Controller
{
    //
    public function dodajNovuOcenu(Request $request){
        $request->validate([
            "imePredmeta"=>"required|string",
            "imeProfesora"=>"required|string",
            "ocena"=>"required|int|min:5|max:10"
        ]);

        OceneModel::create([
            "imePredmeta"=>$request->imePredmeta,
            "ocena"=>$request->ocena,
            "imeProfesora"=>$request->imeProfesora,
        ]);

        return redirect("/");

    }
}
