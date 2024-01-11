<div class="mx-auto flex flex-col items-center bg-blue w-70 h-full p-4 md:flex-row md:justify-center md:flex-wrap md:items-center">
@foreach($gatos as $gato) 
<div class="flex flex-col">
<div class="relative m-[30px]  ">
<div class="border-black border-4 w-[200px] h-[200px] contenedor relative">
 
<img src="/img/{{$gato->sombrero->accesorio->image}}" alt="" class="z-30 w-[200px] h-[200px] absolute" id="imgGafas">
  <img src="/img/{{$gato->gafa->accesorio->image}}" alt="" class="z-20 w-[200px] h-[200px] absolute" id="imgGafas">
  <img src="/img/{{$gato->camiseta->accesorio->image}}" alt="" class="z-10 w-[200px] h-[200px] absolute" id="imgGafas">
  <img src="/img/{{$gato->expresion->accesorio->image}}" alt="" class="z-10 w-[200px] h-[200px] absolute" id="imgGafas">
                <img src="/img/{{$gato->color->accesorio->image}}" alt="" class="w-[200px] h-[200px]" id="imgColor">
                       
</div>
<div class="bg-black  w-[200px] h-[200px] cuadrado-negro"></div> 
</div>




<div class="flex flex-col items-center">
  <div class="flex ">
    <img src="/img-assets/profile.png" class="w-[50px] h-[40px] mb-[10px]" alt="">
  <p class=" mt-[5px]">{{$gato->user->name}}</p>
  </div>

<p>{{$gato->nombre}}</p>
</div>
</div>


     @endforeach 

     </div>


    
  