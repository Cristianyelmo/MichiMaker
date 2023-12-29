<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accesorio;
use App\Models\Gafa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class GafaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $gafas= Gafa::with('accesorio')->get();
        return view('gafa.index',['gafas'=> $gafas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('gafa.create');
    }
    
    








    /**
     * Store a newly created resource in storage.
     * 
     */
    public function store(Request $request)
    {
        //
        /* dd($request);
        */
      
        try{
            DB::beginTransaction();
           
            if($request->hasFile('image')){
              
                 $imagen = $request->image;
                $nombre = $request->nombre;
                $name = $nombre .'.' . $imagen->getClientOriginalExtension(); 

                $ruta = public_path('img');
               $imagen->move($ruta, $name);  
               }else{
               $name = null;
               } 

               




            $accesorio=Accesorio::create([
                'nombre'=> $request->nombre,
                'image'=> $name]);
            $accesorio->gafa()->create([
'accesorio_id' => $accesorio->id

            ]); 
            DB::commit();
                    }catch(Exception $e){
            DB::rollBack();
                        }


 return redirect()->route('gafas.index')
->with('sucess','gafa registrada'); 
        
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
    public function edit(Gafa $gafa)
    {
        //
       
        return view('gafa.edit',['gafas' => $gafa]);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Gafa $gafa)
    {
        //
   
      
if ($request->hasFile('image')){
            
            $imagen = $request->image;
                $nombre = $request->nombre;
                $name = $nombre .'.' . $imagen->getClientOriginalExtension(); 

           if(Storage::disk('public')->exists('img/' .$gafa->accesorio->image)){
           
               Storage::disk('public')->delete('img/' .$gafa->accesorio->image);
                
           }


           $ruta = public_path('img');
           $imagen->move($ruta, $name);



           }else{
           $name = $gafa->accesorio->image;
           }

        Accesorio::where('id',$gafa->accesorio->id)->
        update([
            'nombre'=> $request->nombre,
            'image'=> $name]);

            return redirect()->route('gafas.index')->with('success','Marca Editada'); 

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
