<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  


 <title>Michiker @yield('title')</title>
 

 @stack('css')
 

</head>




<body class="bg-[#CFA7E7] relative ">
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
    .contenedor-2 {
      position: relative;
      
      background-color: white;
      z-index: 1; /* Asegura que el contenido esté por encima del cuadrado negro */
    }

    .cuadrado-negro-2 {
      position: absolute;
    top: 5px;
    40px: ;
    left: 6px;
    
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
    top: 45px;
    40px: ;
    left: 6px;
    
    background-color: black;
    z-index: 0;
    }

    @font-face {
    font-family: 'MiFuente';
    src: url('/fonts/8-BITWONDER.TTF') format('truetype');
    /* Agrega otros formatos si es necesario (woff, woff2, etc.) */
}

body {
    font-family: 'MiFuente', sans-serif;
    /* Otros estilos para el cuerpo del documento */
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
        background-color: black;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .loader {
        border: 4px solid #f3f3f3;
        border-top: 4px solid #3498db;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    #onload-page {
            display: none;
        }
  </style>
   





   
   <div id="overlay" class="overlay">
       <!--  <div class="loader"></div> -->
       <p class="text-white">Cargando...</p>
    </div>
    <div id="onload-page">
    <x-navigation-header/>
   <main class="flex flex-col items-center">


   <x-navigation-menu/>
   @if(auth()->check())

   @if(request()->is('/'))
   <x-index-inicio :gatos="$gatos"/>
@endif
 

    
    @if(auth()->user()->rol_id == 1)
        @yield('admin')
        
    @elseif(auth()->user()->rol_id == 2)
    @yield('user')
    

    @else
     
    @endif
@else


<x-index-inicio :gatos="$gatos"/>


@endif





    </main>
    </div>
    @stack('js')
   <!--  <script>
 window.addEventListener("load", function () {
  document.getElementById("preloader").style.display = "none";
   
}); 
  </script> -->
  <script>
        // Muestra el overlay al iniciar la carga de la página
        document.getElementById('overlay').style.display = 'flex';

        // Oculta el overlay cuando la página haya terminado de cargar
        window.onload = function() {
            document.getElementById('overlay').style.display = 'none';
            document.getElementById('onload-page').style.display = 'block';



        };
    </script>
  <script  src="https://cdn.tailwindcss.com"></script>
 
 
</body>


</html>