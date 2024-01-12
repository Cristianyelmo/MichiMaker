<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\loginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class loginController extends Controller
{
    //

    public function index(){
        if(Auth::check()){
            $user = Auth::user();
            $rolId = $user->rol_id;

           
            if ($rolId == 1) {
               
                return redirect()->route('colors.index');
            } elseif ($rolId == 2) {
               
                return redirect()->route('gatos.index');
            }
         
        }
  
  
  
          return view('auth.login');


         
      }
  
      public function login(loginRequest $request)                                                   {
    
  if(!Auth::validate($request->only('email','password'))){
  
  return redirect()->to('login')
  ->withErrors('Credenciales incorrectas');
  }

  
  $user =Auth::getProvider()->retrieveByCredentials($request->only('email','password'));
  Auth::login($user);
  
  
  if ($user->rol_id == '1') {
    return redirect()->route('colors.index');
  }  else {

    return redirect()->route('gatos.index')->with('success','Bienvenido '.$user->name);
  }
  
  
  
  
  
  
  
  
  
      }





}
