<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Accesorio;
use Illuminate\Http\Request;
use App\Models\Expresion;
use App\Http\Requests\StoreExpresionRequest;
use App\Http\Requests\UpdateExpresionRequest;
class ExpresionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $expresions= Expresion::with('accesorio')->get();
        return view('expresion.index',['expresions'=> $expresions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('expresion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExpresionRequest $request)
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
            $accesorio->expresion()->create([
'accesorio_id' => $accesorio->id

            ]); 
            DB::commit();
                    }catch(Exception $e){
            DB::rollBack();
                        }


 return redirect()->route('expresions.index')
->with('sucess','expresion registrada'); 
        
        
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
    public function edit(Expresion $expresion)
    {
        //
        return view('expresion.edit',['expresions' => $expresion]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExpresionRequest $request, Expresion $expresion)
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
           $name = $expresion->accesorio->image;
           }

        Accesorio::where('id',$expresion->accesorio->id)->
        update([
            'nombre'=> $request->nombre,
            'image'=> $name]);

            return redirect()->route('expresions.index')->with('success','Marca Editada'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
