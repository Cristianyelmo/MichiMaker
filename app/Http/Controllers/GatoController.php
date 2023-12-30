<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Accesorio;
use App\Models\Gafa;
use App\Models\Gato;
use App\Models\Color;
class GatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $gatos = Gato::with(['gafa.accesorio','color.accesorio'])->latest()
        ->get();
        return view('gato.index',compact('gatos'));
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
      
        try{
            DB::beginTransaction();
           
            $gato= new Gato();

            $gato->fill([
                'nombre'=>'alfredo',
                'image'=>'alfredoxd.jpg',
                'color_id'=> $request->color_id,
                'gafa_id'=> $request->gafas_id,
                'sombrero_id'=>1,
                'expresion_id'=>1,
                'user_id'=>2,



            ]);
$gato->save();








               




           
            DB::commit();
                    }catch(Exception $e){
            DB::rollBack();
                        }
        
       

        
                        return redirect()->route('gatos.index')
                        ->with('sucess','gato registrado'); 


        

        
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
    public function edit(Gato $gato)
    {
        //
        $gafas=Gafa::join('accesorios as c','gafas.accesorio_id','=','c.id')
        ->select('gafas.id as id','c.nombre as nombre')
        ->get();
        $colors=Color::join('accesorios as c','colors.accesorio_id','=','c.id')
        ->select('colors.id as id','c.nombre as nombre')
        ->get();

        return view('gato.edit',compact('gato','gafas','colors'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gato $gato)
    {
        //
        try{
            DB::beginTransaction();
           
            

            $gato->fill([
                'nombre'=>'alfredo',
                'image'=>'alfredoxd.jpg',
                'color_id'=> $request->color_id,
                'gafa_id'=> $request->gafas_id,
                'sombrero_id'=>1,
                'expresion_id'=>1,
                'user_id'=>2,



            ]);
$gato->save();








               




           
            DB::commit();
                    }catch(Exception $e){
            DB::rollBack();
                        }
        
       

        
                        return redirect()->route('gatos.index')
                        ->with('sucess','gato registrado'); 


        

        
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
