<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Accesorio;
use App\Models\Gafa;
use App\Models\Gato;
use App\Models\Camiseta;
use App\Models\Color;
use App\Models\Sombrero;
use App\Models\Expresion;
use App\Http\Requests\StoreGatoRequest;
use App\Http\Requests\UpdateGatoRequest;
use Illuminate\Support\Facades\Auth;
class GatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $gatos = Gato::with(['gafa.accesorio','color.accesorio','user'])->latest()
        ->get();
        
        return view('gato.index',compact('gatos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $camisetas=Camiseta::join('accesorios as c','camisetas.accesorio_id','=','c.id')
        ->select('camisetas.id as id','c.nombre as nombre')->get();;
        $gafas=Gafa::join('accesorios as c','gafas.accesorio_id','=','c.id')
        ->select('gafas.id as id','c.nombre as nombre')
        ->get();
        $colors=Color::join('accesorios as c','colors.accesorio_id','=','c.id')
        ->select('colors.id as id','c.nombre as nombre')
        ->get();
        $sombreros=Sombrero::join('accesorios as c','sombreros.accesorio_id','=','c.id')
        ->select('sombreros.id as id','c.nombre as nombre')
        ->get();
        $expresions=Expresion::join('accesorios as c','expresions.accesorio_id','=','c.id')
        ->select('expresions.id as id','c.nombre as nombre')
        ->get();


        return view('gato.create',compact('gafas','colors','sombreros','expresions','camisetas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGatoRequest $request)
    {
      
        try{
            DB::beginTransaction();
           
            $gato= new Gato();

            $user = Auth::user();
            $userId = $user->id;


            $gato->fill([
                'nombre'=>$request->name,
                'image'=>'alfredoxd.jpg',
                'color_id'=> $request->color_id,
                'gafa_id'=> $request->gafas_id ? $request->gafas_id :8,
                'sombrero_id'=> $request->sombrero_id ? $request->sombrero_id :7,
                'camiseta_id'=> $request->camiseta_id ? $request->camiseta_id :10,
                'expresion_id'=>$request->expresion_id,
                'user_id'=>$userId,



            ]);
$gato->save();








               




           
            DB::commit();
                    }catch(Exception $e){
            DB::rollBack();
                        }
        
       

        
                        return redirect()->route('gatos.index')
                        ->with('success','michi creado'); 


        

        
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
      
        //dd()
        $camisetas=Camiseta::join('accesorios as c','camisetas.accesorio_id','=','c.id')
        ->select('camisetas.id as id','c.nombre as nombre')->get();;
        $gafas=Gafa::join('accesorios as c','gafas.accesorio_id','=','c.id')
        ->select('gafas.id as id','c.nombre as nombre')
        ->get();
        $colors=Color::join('accesorios as c','colors.accesorio_id','=','c.id')
        ->select('colors.id as id','c.nombre as nombre')
        ->get();
        $sombreros=Sombrero::join('accesorios as c','sombreros.accesorio_id','=','c.id')
        ->select('sombreros.id as id','c.nombre as nombre')
        ->get();
        $expresions=Expresion::join('accesorios as c','expresions.accesorio_id','=','c.id')
        ->select('expresions.id as id','c.nombre as nombre')
        ->get();

        return view('gato.edit',compact('gato','gafas','colors','sombreros','expresions','camisetas'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGatoRequest $request, Gato $gato)
    {
        //
        try{
            DB::beginTransaction();
           
            $user = Auth::user();
            $userId = $user->id;

            $gato->fill([
                'nombre'=>$request->name,
                'image'=>'alfredoxd.jpg',
                'color_id'=> $request->color_id,
                'gafa_id'=> $request->gafas_id ? $request->gafas_id :8,
                'sombrero_id'=> $request->sombrero_id ? $request->sombrero_id :7,
                'camiseta_id'=> $request->camiseta_id ? $request->camiseta_id :10,
                'expresion_id'=>$request->expresion_id,
                'user_id'=>$userId,



            ]);
$gato->save();








               




           
            DB::commit();
                    }catch(Exception $e){
            DB::rollBack();
                        }
        
       

        
                        return redirect('https://michimaker-production.up.railway.app/gatos')
                        ->with('sucess','michi editado'); 


        

        
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //


        $gato = Gato::find($id);

        // Verificar si el registro existe antes de intentar eliminarlo
        if ($gato) {
            // Eliminar el registro
            $gato->delete();
    
            // Redirigir con un mensaje de éxito
            return redirect()->route('gatos.index')->with('no-success', 'michi borrado');
        }
    }
}
