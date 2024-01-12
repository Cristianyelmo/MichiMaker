@extends('template')
@section('title','crea tus michis')
@push('css')
<style>
  

    .contenedor-7 {
      position: relative;
      
      background-color: white;
      z-index: 1; /* Asegura que el contenido esté por encima del cuadrado negro */
    }

    .cuadrado-negro-7 {
      position: absolute;
    top: 15px;
    40px: ;
    left: 17px;
    
    background-color: black;
    z-index: 0;
    }

  


  </style>
@endpush
@section('user')
<div class="lg:flex lg:justify-center">
<div class="flex flex-col items-center lg:justify-center">
    <div class="border-4 border-black w-[300px] h-[300px] relative mt-[16px]" id="miDiv">
       
                <img src="https://michimaker-production.up.railway.app/storage/img/sin-eso.png" alt="" class="z-30 w-[300px] h-[300px] absolute" id="imgSombrero">
     <img src="https://michimaker-production.up.railway.app/storage/img/sin-eso.png" alt="" class="z-20 w-[300px] h-[300px] absolute" id="imgGafas"> 
           
                <img src="https://michimaker-production.up.railway.app/storage/img/sin-eso.png" alt="" class="z-10 w-[300px] h-[300px] absolute" id="imgExpresion">
                <img src="https://michimaker-production.up.railway.app/storage/img/sin-eso.png" alt="" class="z-10 w-[300px] h-[300px] absolute" id="imgCamiseta">
                <img src="https://michimaker-production.up.railway.app/storage/img/sin-eso.png" alt="" class="w-[300px] h-[300px]" id="imgColor">
            </div>
        <form  action="{{route('gatos.store')}}" method="post" enctype="multipart/form-data">
            @csrf


            <div class="flex flex-col items-center text-center">
            <p class="mt-[10px] text-center">Nombre</p>
            <input type="text" class="border-black border-4 p-4 m-[5px]" name="name">
            @error('name')
<small class='text-danger'>{{'*'.$message}}</small>

@enderror
</div>


</div>     <!--   <input type="file" name="image" id="imageInput" accept="image/*" class="hidden"> -->
<div class="flex flex-col items-center">

<p>Color</p>
    <div class="relative m-3">

            <select  name="color_id" id="presentacione_id" onchange="playSound()" class="form-control p-4 border-black border-4 contenedor-7 outline-none"  required>
            <option value="" disabled selected hidden>Selecciona</option>
                @foreach ($colors as $item)
                    <option value="{{$item->id}}"  data-info="{{$item->nombre}}"  >{{$item->nombre}}</option>
                @endforeach
            </select>
            <div class="bg-black  w-[210px] h-[55px] cuadrado-negro-7"></div>
            </div>
   


            @error('color_id')
<small class='text-danger'>{{'*'.$message}}</small>

@enderror
<!--  -->



<!--  -->
<p>Expresion</p>
            <div class="relative m-3">
<select name="expresion_id" id="expresions_id" onchange="playSound()" class="form-control p-4 border-black border-4 contenedor-7 outline-none" required>
            <option value="" disabled selected hidden>Selecciona</option>
                @foreach ($expresions as $item)
                    <option value="{{$item->id}}"  data-info-4="{{$item->nombre}}" >{{$item->nombre}}</option>
                @endforeach
            </select>
            <div class="bg-black  w-[210px] h-[55px] cuadrado-negro-7"></div>
            </div>
            @error('expresion_id')
<small class='text-danger'>{{'*'.$message}}</small>

@enderror
<p>Gafas</p>
<div class="relative m-5">
            <select name="gafas_id" id="gafas_id" onchange="playSound()" class="form-control p-4 border-black border-4 contenedor-7 outline-none">
            <option value="" disabled selected hidden>Selecciona</option>
                @foreach ($gafas as $item)
                    <option value="{{$item->id}}" data-info-2="{{$item->nombre}}" >{{$item->nombre}}</option>
                @endforeach
            </select>
            <div class="bg-black  w-[210px] h-[55px] cuadrado-negro-7"></div>
            </div>

            <p>Sombrero</p>
            <div class="relative m-5">

<select name="sombrero_id" id="sombreros_id" onchange="playSound()" class="form-control p-4 border-black border-4 contenedor-7 outline-none" >
            <option value="" disabled selected hidden>Selecciona</option>
                @foreach ($sombreros as $item)
                    <option value="{{$item->id}}"  data-info-3="{{$item->nombre}}" >{{$item->nombre}}</option>
                @endforeach
            </select>
            <div class="bg-black  w-[210px] h-[55px] cuadrado-negro-7"></div>
            </div>

            <p>Camiseta</p>
            <div class="relative m-5">
            <select name="camiseta_id" onchange="playSound()" id="camisetas_id" class="form-control p-4 border-black border-4 contenedor-7 outline-none" >
            <option value="" disabled selected hidden>Selecciona</option>
                @foreach ($camisetas as $item)
                
                    <option value="{{$item->id}}"  data-info-5="{{$item->nombre}}" >{{$item->nombre}}</option>
                @endforeach
            </select>
            <div class="bg-black  w-[210px] h-[55px] cuadrado-negro-7"></div>
            </div>
            


            <button type="submit" class="bg-white border-black border-4 p-4 mt-[20px] mb-[20px]">Crear michi</button>
        </form>
        </div>
       
    </div>
    @endsection
    </div>
    <audio id="myAudio">
    <source src="/sound/option.mp3" type="audio/mp3">
    Tu navegador no soporta el elemento de audio.
  </audio>
@push('js')
<script src="/js/imagen-select.js">

  /* gjjf*/

</script>

<script>
     function playSound() {
      var audio = document.getElementById("myAudio");
      audio.play();
    }
</script>
@endpush



