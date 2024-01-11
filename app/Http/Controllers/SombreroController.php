<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Accesorio;
use Illuminate\Http\Request;
use App\Models\Sombrero;
use App\Http\Requests\StoreSombreroRequest;
use App\Http\Requests\UpdateSombreroRequest;
class SombreroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sombreros= Sombrero::with('accesorio')->get();
        return view('sombrero.index',['sombreros'=> $sombreros]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('sombrero.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSombreroRequest $request)
    {
        //
        try{
            DB::beginTransaction();
           
            if($request->hasFile('image')){
              
                 $imagen = $request->image;
                $nombre = $request->nombre;
                $name = $nombre .'.' . $imagen->getClientOriginalExtension(); 

                $ruta = public_path('storage/img');
               $imagen->move($ruta, $name);  
               }else{
               $name = null;
               } 

               




            $accesorio=Accesorio::create([
                'nombre'=> $request->nombre,
                'image'=> $name]);
            $accesorio->sombrero()->create([
'accesorio_id' => $accesorio->id

            ]); 
            DB::commit();
                    }catch(Exception $e){
            DB::rollBack();
                        }


 return redirect()->route('sombreros.index')
->with('sucess','sombrero registrada'); 
        
        
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
    public function edit(Sombrero $sombrero)
    {
        //
        return view('sombrero.edit',['sombreros' => $sombrero]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSombreroRequest $request, Sombrero $sombrero)
    {
        //
        if ($request->hasFile('image')){
            
            $imagen = $request->image;
                $nombre = $request->nombre;
                $name = $nombre .'.' . $imagen->getClientOriginalExtension(); 

           if(Storage::disk('public')->exists('img/' .$gafa->accesorio->image)){
           
               Storage::disk('public')->delete('img/' .$gafa->accesorio->image);
                
           }


           $ruta = public_path('storage/img');
           $imagen->move($ruta, $name);



           }else{
           $name = $sombrero->accesorio->image;
           }

        Accesorio::where('id',$sombrero->accesorio->id)->
        update([
            'nombre'=> $request->nombre,
            'image'=> $name]);

            return redirect()->route('sombreros.index')->with('success','Marca Editada'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
