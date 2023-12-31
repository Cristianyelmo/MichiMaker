<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
 <title>Michiker @yield('title')</title>

 @stack('css')
</head>
<body>
<style>
  .contenedor {
      position: relative;
      
      background-color: white;
      z-index: 1; /* Asegura que el contenido esté por encima del cuadrado negro */
    }

    .cuadrado-negro {
      position: absolute;
    top: 10px;
    40px: ;
    left: 20px;
    
    background-color: black;
    z-index: 0;
    }


    .contenedor-1 {
      position: relative;
      
      background-color: white;
      z-index: 1; /* Asegura que el contenido esté por encima del cuadrado negro */
    }

    .cuadrado-negro-1 {
      position: absolute;
    top: 0px;
    40px: ;
    left: 6px;
    
    background-color: black;
    z-index: 0;
    }
  </style>
   





   <x-navigation-header/>
   <main class="flex">


   <x-navigation-menu/>
   @if(auth()->check())
    @if(auth()->user()->rol_id == 1)
        @yield('admin')
    @elseif(auth()->user()->rol_id == 2)
    @yield('user')
    @else
        michi make
    @endif
@else
    michi make sale
@endif





    </main>

    @stack('js')
</body>
</html>