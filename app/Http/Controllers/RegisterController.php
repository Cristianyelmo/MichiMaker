<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    public function register(Request $request){
        $user= new User();
        
         
    
        $user->fill([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'rol_id'=>2,
           
    
    
    
        ]);
    $user->save();
    
    Auth::login($user);
    
    return redirect()->route('gatos.index')->with('success','Bienvenido '.$user->name);
    
    
    
    }
    
    
    public function index(){
        if(Auth::check()){
            $user = Auth::user();
            $rolId = $user->rol_id;
    
            // Hacer una condición basada en el rol_id
            if ($rolId == 1) {
                // Acciones específicas para el rol_id 1
                return redirect()->route('colors.index');
            } elseif ($rolId == 2) {
                // Acciones específicas para el rol_id 2
                return redirect()->route('gatos.index');
            }
         
        }
    
    
    
          return view('auth.register');
    
    
         
      }
}
