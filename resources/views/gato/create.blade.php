<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
     @vite('resources/css/app.css') 

    <style>
        .contenedor {
            position: relative;
            background-color: white;
            z-index: 1; /* Asegura que el contenido esté por encima del cuadrado negro */
        }

        .cuadrado-negro {
            position: absolute;
            top: 10px;
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
            right: 6px;
            background-color: black;
            z-index: 0;
        }
    </style>
</head>
<body>

<header class="border-4 border-black">
    michi maker
</header>

<main class="flex">
    <div class="w-1/4 h-screen border-4 border-black">
        <h1>Accesorios</h1>
        <a href="">Lentes</a>
        <a href="{{route('colors.index')}}">Colors</a>
        <a href="{{route('gafas.index')}}">Gafas</a>
        <a href="">Expresion</a>
    </div>

    <div>
    <div class="border-4 border-black w-[300px] h-[300px] relative" id="miDiv">
                <img src="" alt="" class="w-[300px] h-[300px] absolute" id="imgGafas">
                <img src="" alt="" class="w-[300px] h-[300px]" id="imgColor">
            </div>
        <form  action="{{ route('gatos.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            

          <!--   <input type="file" name="image" id="imageInput" accept="image/*" class="hidden"> -->

            <select name="color_id" id="presentacione_id" class="form-control">
                @foreach ($colors as $item)
                    <option value="{{$item->id}}"  data-info="{{$item->nombre}}" {{ old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>
                @endforeach
            </select>

            <select name="gafas_id" id="gafas_id" class="form-control">
                @foreach ($gafas as $item)
                    <option value="{{$item->id}}" data-info-2="{{$item->nombre}}" {{ old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>
                @endforeach
            </select>

            <button type="submit">Capturar Imagen</button>
        </form>

       
    </div>
</main>
<script>
   
   


  </script>
<script>

  /* gjjf*/

  var nombreImagen = document.getElementById('presentacione_id');
   var imgColor = document.getElementById('imgColor');

   nombreImagen.addEventListener('change', function() {
      // Obtener el valor seleccionado del elemento select
      /* var nombreImagenxd = nombreImagen.value;
 */


      var opcionSeleccionada = nombreImagen.options[nombreImagen.selectedIndex];

// Obtén el valor y la información personalizada

var infoPersonalizada = opcionSeleccionada.getAttribute("data-info");








     imgColor.src= `/img/${infoPersonalizada}.png`
    });


    var nombreImagen2 = document.getElementById('gafas_id');
   var imgGafas = document.getElementById('imgGafas');

   nombreImagen2.addEventListener('change', function() {
      // Obtener el valor seleccionado del elemento select
     /*  var nombreImagenxd2 = nombreImagen2.value; */
      var opcionSeleccionada = nombreImagen2.options[nombreImagen2.selectedIndex];

// Obtén el valor y la información personalizada

var infoPersonalizada = opcionSeleccionada.getAttribute("data-info-2");
     imgGafas.src= `/img/${infoPersonalizada}.png`
    });

  /* hjgjg */
 
</script>

</body>
</html>
