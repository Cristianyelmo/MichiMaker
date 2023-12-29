<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
 
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
    <header class="border-4 border-black">
michi maker
    </header>
    <main class="flex">
      <div class=" w-1/4 h-screen border-4 border-black">
<h1>  Accesorios</h1>
<a href="">Lentes</a>
<a href="{{route('gafas.index')}}">Gafas</a>
<a href="{{route('colors.index')}}">Colors</a>
<a href="">Expresion</a>
      </div>
<div class="">
<a href="{{route('gafas.create')}}">
<div class="flex justify-center mt-[30px]">
<div class="relative">
<button class="border border-solid border-4 border-black rounded-full w-[40px] h-[40px] contenedor-1">+</button>
<div class="bg-black rounded-full w-[40px] h-[40px] cuadrado-negro-1"></div>
</div>
<h1 class="ml-[15px] mt-[3px]">Crear lentes</h1>
</div>
</a>

      <div class="flex bg-blue w-70 h-full p-4 ">
    @foreach($gafas as $gafa)
     
      <div class="relative m-[30px] ">
<div class="border-black border-4 w-[200px] h-[200px] contenedor">
 
  <img src="/img/{{$gafa->accesorio->image}}" alt="">
</div>
<div class="bg-black  w-[200px] h-[200px] cuadrado-negro"></div>
     
<!-- crud -->
<div class="flex justify-center space-x-3 mt-[20px]">
<a href="{{route('gafas.edit',['gafa'=>$gafa])}}" class="border-black border-4 w-[30px] h-[30px]">E</a>

<div class="border-black border-4 w-[30px] h-[30px]"></div>
<div class="border-black border-4 w-[30px] h-[30px]"></div>
</div>
<!--  -->

</div>
      @endforeach



</div>


      

      </div>

    </main>
</body>
</html>
