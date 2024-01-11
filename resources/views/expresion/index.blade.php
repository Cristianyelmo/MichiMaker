@extends('template')
@section('title','tus expresions')
@push('css')

@endpush
@section('admin')
<div class="">
<a href="{{route('expresions.create')}}">
<div class="flex justify-center mt-[30px]">
<div class="relative">
<button class="border border-solid border-4 border-black rounded-full w-[40px] h-[40px] contenedor-1">+</button>
<div class="bg-black rounded-full w-[40px] h-[40px] cuadrado-negro-1"></div>
</div>
<h1 class="ml-[15px] mt-[3px]">Crear expresion</h1>
</div>
</a>

      <div class="flex flex-col items-center bg-blue w-70 h-full p-4 md:flex-row md:justify-center md:flex-wrap md:items-center ">
    @foreach($expresions as $expresion)
     
      <div class="relative m-[30px] ">
<div class="border-black border-4 w-[200px] h-[200px] contenedor">
 
  <img src="/img/{{$expresion->accesorio->image}}" alt="">
</div>
<div class="bg-black  w-[200px] h-[200px] cuadrado-negro"></div>
     
<!-- crud -->
<div class="flex justify-center space-x-3 mt-[20px]  text-white ">
      <div class="flex justify-center">
<a href="{{route('expresions.edit',['expresion'=>$expresion])}}" class="bg-[#008000] border-black border-4 w-[30px] h-[30px]"><i class="fa-solid fa-pen-to-square"></i></a>
</div>

</div>
<!--  -->

</div>
      @endforeach



</div>


      

      </div>

      @endsection

@push('js')


@endpush