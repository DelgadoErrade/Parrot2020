<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InicioController extends Controller
{
    public function index()
    {
        //dd('Usuario_id = '. session()->get('usuario_id'));
        return view('inicio');//admin.admin.index
    }


}
