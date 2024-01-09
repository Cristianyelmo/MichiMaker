<?php

namespace App\Http\Controllers;
use App\Models\Gato;
use Illuminate\Http\Request;

class indexController extends Controller
{
    //
    public function index()
    {
        //
        $gatos = Gato::with(['gafa.accesorio','color.accesorio','user'])->latest()
        ->get();
        
        return view('template',compact('gatos'));
    }
}
