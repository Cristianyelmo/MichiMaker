<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accesorio;
use App\Models\Camiseta;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreCamisetaRequest;
use App\Http\Requests\UpdateCamisetaRequest;
class CamisetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $camisetas= Camiseta::with('accesorio')->get();
        return view('camiseta.index',['camisetas'=> $camisetas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('camiseta.create');
    }
    
    








    /**
     * Store a newly created resource in storage.
     * 
     */
    public function store(StoreCamisetaRequest $request)
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
            $accesorio->camiseta()->create([
'accesorio_id' => $accesorio->id

            ]); 
            DB::commit();
                    }catch(Exception $e){
            DB::rollBack();
                        }


 return redirect()->route('camisetas.index')
->with('sucess','camiseta registrada'); 
        
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
    public function edit(Camiseta $camiseta)
    {
        //
       
        return view('camiseta.edit',['camisetas' => $camiseta]);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCamisetaRequest $request,Camiseta $camiseta)
    {
        //
   
      
if ($request->hasFile('image')){
            
            $imagen = $request->image;
                $nombre = $request->nombre;
                $name = $nombre .'.' . $imagen->getClientOriginalExtension(); 

           if(Storage::disk('public')->exists('img/' .$camiseta->accesorio->image)){
           
               Storage::disk('public')->delete('img/' .$camiseta->accesorio->image);
                
           }


           $ruta = public_path('img');
           $imagen->move($ruta, $name);



           }else{
           $name = $camiseta->accesorio->image;
           }

        Accesorio::where('id',$camiseta->accesorio->id)->
        update([
            'nombre'=> $request->nombre,
            'image'=> $name]);

            return redirect()->route('camisetas.index')->with('success','Marca Editada'); 

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
