<?php

namespace App\Http\Controllers;

use App\Models\OceneModel;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //

    public function getAllOcene(){
        $title = "Home page";
        $allOcene = OceneModel::all();


        return view("home",compact("title","allOcene"));
    }
}
