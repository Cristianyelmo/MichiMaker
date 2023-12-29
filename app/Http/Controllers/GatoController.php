<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accesorio;
use App\Models\Gafa;
use App\Models\Color;
class GatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $gafas=Gafa::join('accesorios as c','gafas.accesorio_id','=','c.id')
        ->select('gafas.id as id','c.nombre as nombre')
        ->get();
        $colors=Color::join('accesorios as c','colors.accesorio_id','=','c.id')
        ->select('colors.id as id','c.nombre as nombre')
        ->get();

        return view('gato.create',compact('gafas','colors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        
      


        

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
