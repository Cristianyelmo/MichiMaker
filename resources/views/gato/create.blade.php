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


    .contenedor-2 {
      position: relative;
      
      background-color: white;
      z-index: 1; /* Asegura que el contenido esté por encima del cuadrado negro */
    }

    .cuadrado-negro-2 {
      position: absolute;
    top: 10px;
    40px: ;
    right: 6px;
    background-color: black;
    z-index: 0;
    }




      .contenedor-3 {
      position: relative;
      
      background-color: white;
      z-index: 1; /* Asegura que el contenido esté por encima del cuadrado negro */
    }

    .cuadrado-negro-3 {
      position: absolute;
    bottom: 5px;
    40px: ;
    right: 6px;
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
<a href="{{route('colors.index')}}">Colors</a>
<a href="{{route('gafas.index')}}">Gafas</a>
<a href="">Expresion</a>
      </div>
<div class="">
  <form action="{{ route('colors.store') }}" method="post" enctype='multipart/form-data'>


<div class="border-4 border-black w-[300px] h-[300px] relative">
<img src="" alt="" class=" w-[300px] h-[300px] absolute" id="imgGafas">
<img src="" alt="" class=" w-[300px] h-[300px]" id="imgColor">

</div>


<select name="presentacione_id" id="presentacione_id" class='form-control'>

@foreach ($colors as $item)

<option value="{{$item->nombre}}"  {{old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>

@endforeach

   </select>


   <select name="presentacione_id" id="gafas_id" class='form-control'>

@foreach ($gafas as $item)

<option value="{{$item->nombre}}"  {{old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>

@endforeach

   </select>


</form>


      </div>

    </main>



    
  <script>
   
   var nombreImagen = document.getElementById('presentacione_id');
   var imgColor = document.getElementById('imgColor');

   nombreImagen.addEventListener('change', function() {
      // Obtener el valor seleccionado del elemento select
      var nombreImagenxd = nombreImagen.value;

     imgColor.src= `/img/${nombreImagenxd}.png`
    });


    var nombreImagen2 = document.getElementById('gafas_id');
   var imgGafas = document.getElementById('imgGafas');

   nombreImagen2.addEventListener('change', function() {
      // Obtener el valor seleccionado del elemento select
      var nombreImagenxd2 = nombreImagen2.value;

     imgGafas.src= `/img/${nombreImagenxd2}.png`
    });


  </script>
</body>
</html>
