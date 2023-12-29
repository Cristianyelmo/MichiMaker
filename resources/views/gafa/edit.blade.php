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
<a href="{{route('gafas.index')}}">Gafas</a>
<a href="{{route('colors.index')}}">Colors</a>
<a href="">Expresion</a>
      </div>
<div class="">
  <form action="{{route('gafas.update',['gafa' => $gafas])}}" method="post" enctype='multipart/form-data'>
  @method('PATCH')
    @csrf
<div class="flex flex-col items-center mt-[30px]">



<label for="" >
  <input type="file" name="image" class="hidden" id="fileInput">
<div class="relative m-[30px] cursor-pointer " id="openFileInput">
<div class="border-black border-4 w-[200px] h-[200px] contenedor">
<img src="/img/{{$gafas->accesorio->image}}" id="uploadedImage" alt="">
</div>
<div class="bg-black  w-[200px] h-[200px] cuadrado-negro"></div>
     
<!-- crud -->

<!--  -->

</div>

</label>




  <div class="ml-[30px] relative">
<input type="text" name="nombre" class="outline-none border border-4 border-black p-2 w-[460px] contenedor-2"
value="{{old('nombre',$gafas->accesorio->nombre)}}">
<div class=" w-[460px] bg-black h-[50px] cuadrado-negro-2"></div>
</div>
      
 
<div class="relative mt-[30px]">
<button type="submit" class="w-[90px]  h-[60px]   border border-black border-4 mt-[40px] rounded-full contenedor-3">Editar</button>
<div class="w-[90px]  h-[60px]   bg-black  rounded-full cuadrado-negro-3"></div>
</div> 

</form>


      </div>

    </main>



    
  <script>
    // Obtén el div y el input por sus ID
    const openFileInput = document.getElementById('openFileInput');
    const fileInput = document.getElementById('fileInput');
    const uploadedImage = document.getElementById('uploadedImage');
    // Agrega un evento de clic al div para activar el input de archivo
    openFileInput.addEventListener('click', () => {
      fileInput.click();
      console.log('hoola')
      
      
    })

    fileInput.addEventListener('change', () => {
      const file = fileInput.files[0];

      if (file) {
        // Crear un objeto FileReader para leer el archivo como una URL de datos
        const reader = new FileReader();

        // Configurar el evento de carga para actualizar la imagen una vez que se haya cargado
        reader.onload = function (e) {
          console.log(e)
          uploadedImage.src = e.target.result;
          uploadedImage.classList.remove('hidden'); // Mostrar la imagen
        };

        // Leer el archivo como una URL de datos
        reader.readAsDataURL(file);
      }
    });
    // Agrega un evento de cambio al input de archivo para manejar la selección del archivo
    
      // Puedes realizar acciones adicionales aquí, por ejemplo, mostrar el nombre del archivo seleccionado
      

     



  </script>
</body>
</html>
