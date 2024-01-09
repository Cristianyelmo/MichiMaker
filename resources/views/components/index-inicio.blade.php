
 

<img src="/Ellipse.png" class="absolute w-[300px] h-[300px]" alt="">

@foreach($gatos as $gato) 
    
      <div class="relative m-[30px]  ">
<div class="border-black border-4 w-[200px] h-[200px] contenedor relative">
 
<img src="/img/{{$gato->sombrero->accesorio->image}}" alt="" class="z-30 w-[200px] h-[200px] absolute" id="imgGafas">
  <img src="/img/{{$gato->gafa->accesorio->image}}" alt="" class="z-20 w-[200px] h-[200px] absolute" id="imgGafas">
  <img src="/img/{{$gato->camiseta->accesorio->image}}" alt="" class="z-10 w-[200px] h-[200px] absolute" id="imgGafas">
  <img src="/img/{{$gato->expresion->accesorio->image}}" alt="" class="z-10 w-[200px] h-[200px] absolute" id="imgGafas">
                <img src="/img/{{$gato->color->accesorio->image}}" alt="" class="w-[200px] h-[200px]" id="imgColor">
                   
</div>
<div class="bg-black  w-[200px] h-[200px] cuadrado-negro"></div>

<!-- crud -->
<div class="flex justify-center space-x-3 mt-[20px]">
<!-- <a href="{{route('gatos.create',['gato'=>$gatos])}}" class="border-black border-4 w-[30px] h-[30px]">E</a> -->
<div class="flex flex-col items-center">
<p>{{$gato->nombre}}</p>
<div class="flex space-x-4"> 
  <div class="relative">
  <div class="bg-white mt-[4px] rounded-full w-[20px] h-[20px] z-2 border-black border-5"></div> 
  
  </div>
<p>{{$gato->user->name}}</p>
</div>
</div>
</div>
</div>
<!--  -->

</div>

     @endforeach 
    
    