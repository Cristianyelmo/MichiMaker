<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accesorio;
use App\Models\Color;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UpdateColorRequest;
use App\Http\Requests\StoreColorRequest;
use Illuminate\Support\Facades\Storage;
class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $colors= Color::with('accesorio')->get();
        return view('color.index',['colors'=> $colors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('color.create');
    }
    
    








    /**
     * Store a newly created resource in storage.
     * 
     */
    public function store(StoreColorRequest $request)
    {
        //
        /* dd($request);
        */
      
        try{
            DB::beginTransaction();
           
         
            

               if ($request->hasFile('image')) {
                $imagen = $request->image;
                $nombre = $request->nombre;
                $name = $nombre .'.' . $imagen->getClientOriginalExtension();
            
                // Ruta directa al directorio 'public'
                $ruta = public_path();
            
                // Mueve la imagen al directorio 'public' con el nombre proporcionado
                $imagen->move($ruta, $name);
            } else {
                $name = null;
            }

               




            $accesorio=Accesorio::create([
                'nombre'=> $request->nombre,
                'image'=> $name]);
            $accesorio->color()->create([
'accesorio_id' => $accesorio->id

            ]); 
            DB::commit();
                    }catch(Exception $e){
            DB::rollBack();
                        }


 return redirect()->route('colors.index')
->with('sucess','color registrada'); 
        
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
    public function edit(Color $Color)
    {
        //
       
        return view('color.edit',['colors' => $Color]);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateColorRequest $request,Color $color)
    {
        //
      
      
        if($request->hasFile('image')){
            
            $imagen = $request->image;
                $nombre = $request->nombre;
                $name = $nombre .'.' . $imagen->getClientOriginalExtension(); 

           if(Storage::disk('public')->exists('img/' .$color->accesorio->image)){
           
               Storage::disk('public')->delete('img/' .$color->accesorio->image);
                
           }


           $ruta = public_path('img');
           $imagen->move($ruta, $name);



           }else{
           $name = $color->accesorio->image;
           }

        Accesorio::where('id',$color->accesorio->id)->
        update([
            'nombre'=> $request->nombre,
            'image'=> $name]);

            return redirect()->route('colors.index')->with('success','Marca Editada'); 

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
