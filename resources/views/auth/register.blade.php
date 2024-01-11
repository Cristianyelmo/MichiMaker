<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Sistema de ventas de abarrotes" />
        <meta name="author" content="SakCode" />
        <script defer src="https://cdn.tailwindcss.com"></script>

        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{asset('css/template.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-[#CFA7E7] relative">
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


    @font-face {
  font-family: 'MiFuente'; /* Puedes darle el nombre que desees */
  src: url('fonts/8-BITWONDER.TTF') format('truetype'); /* Ruta a tu archivo de fuente */
}

body {
  font-family: 'MiFuente', sans-serif; /* Usa el nombre definido en @font-face como la fuente para el cuerpo del documento */
}
    
.text-stroke {
  color: white;
  color: white; /* Color del texto */
  font-size: 1.5rem; /* Tamaño de la fuente */
  text-shadow: 
    -4px -4px 0 #000, 4px -4px 0 #000, 
    -4px 4px 0 #000, 4px 4px 0 #000; /* Contorno mediante sombras */
  letter-spacing: 0;
}
.overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #EFC8FD;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

  </style>
    <x-navigation-header/>
    <div id="overlay" class="overlay">
       <!--  <div class="loader"></div> -->
       <img src="/img-assets/sucess.gif" alt="">
    </div>
                <main >
                  

                              



<div class="flex flex-col items-center mt-[80px]">                               
<form action="https://michimaker-production.up.railway.app/register" method="post" class="flex flex-col items-center">
@csrf
<label>nombre</label>
<input type="text"  name="name" class="p-3" placeholder="name" >
<label>email</label>
<input type="email" name="email" class="p-3" placeholder="hola@gmail.com">
<label>password</label>
<input type="password" name="password" class="p-3" placeholder="password" >




<button type="submit " class="bg-white p-3 mt-[15px] border-black border-4">  <a class="btn btn-primary " >crear usuario</a></button>

</form>
<div class="flex flex-col items-center text-center">
                                        @if($errors->any())
                               @foreach ($errors->all() as $item)
                               <div class="text-red-500">
  {{$item}}
 
</div>
@endforeach

@endif
</div>                               
</div>



</main>
                <script>
        // Muestra el overlay al iniciar la carga de la página
        document.getElementById('overlay').style.display = 'flex';

        // Oculta el overlay cuando la página haya terminado de cargar
        window.onload = function() {
            document.getElementById('overlay').style.display = 'none';
        };
    </script>
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>
