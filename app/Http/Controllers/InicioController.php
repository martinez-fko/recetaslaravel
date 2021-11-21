<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receta;


class InicioController extends Controller
{
    //
    public function index(){

        //Obtener las recetas mas nuevas
        //$nuevas = Receta::orderBy('created_at','DESC')->get();
        $nuevas = Receta::latest()->limit(4)->get();


        return view('inicio.index', compact('nuevas'));
    }
}
