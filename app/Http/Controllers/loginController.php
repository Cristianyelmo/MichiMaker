<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class loginController extends Controller
{
    //

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
  
  
  
          return view('auth.login');


         
      }
  
      public function login(Request $request)                                                   {
    
  if(!Auth::validate($request->only('email','password'))){
  
  return redirect()->to('login')
  ->withErrors('Credenciales incorrectas');
  }
  /* creat una seccion */
  
  $user =Auth::getProvider()->retrieveByCredentials($request->only('email','password'));
  Auth::login($user);
  
  
  if ($user->rol_id == '1') {
    return redirect()->route('colors.index');
  }  else {
    // Redirige a una ruta por defecto si no hay coincidencia de roles
    return redirect()->route('gatos.index')->with('success','Bienvenido '.$user->name);
  }
  
  
  
  
  
  
  
  
  
      }





}
