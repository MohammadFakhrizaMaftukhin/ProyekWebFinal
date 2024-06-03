<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class DefaultController extends Controller
{
    //
    public function home() {
        $Data=Kategori::all();
        return view('tema.home',["data"=>$Data]);
    }
}
