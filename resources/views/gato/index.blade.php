@extends('template')
@section('title','- tu michis')
@push('css')

@endpush
@section('user')
  
   
<div class="">
<a href="{{route('gatos.create')}}">
<div class="flex justify-center mt-[30px]">
<div class="relative">
<button class="border border-solid border-4 border-black rounded-full w-[40px] h-[40px] contenedor-1">+</button>
<div class="bg-black rounded-full w-[40px] h-[40px] cuadrado-negro-1"></div>
</div>
<h1 class="ml-[15px] mt-[3px]">Crear color</h1>
</div>
</a>

      <div class="flex bg-blue w-70 h-full p-4 ">
  @foreach($gatos as $gato) 
     @if($gato->user->id == auth()->user()->id)
      <div class="relative m-[30px] ">
<div class="border-black border-4 w-[200px] h-[200px] contenedor relative">
 
  
  <img src="/img/{{$gato->gafa->accesorio->image}}" alt="" class="w-[200px] h-[200px] absolute" id="imgGafas">
                <img src="/img/{{$gato->color->accesorio->image}}" alt="" class="w-[200px] h-[200px]" id="imgColor">
</div>
<div class="bg-black  w-[200px] h-[200px] cuadrado-negro"></div>
     
<!-- crud -->
<div class="flex justify-center space-x-3 mt-[20px]">
<!-- <a href="{{route('gatos.create',['gato'=>$gatos])}}" class="border-black border-4 w-[30px] h-[30px]">E</a> -->

<div class="border-black border-4 w-[30px] h-[30px]">
  <a href="{{route('gatos.edit',['gato'=>$gato])}}">E</a>
</div>
<div class="border-black border-4 w-[30px] h-[30px]">
<form action="{{route('gatos.destroy',['gato'=>$gato->id])}}" method='post'>
                        @method('DELETE')
                        @csrf
                    <button type="submit" class="btn btn-primary">B</button>
                    </form>
</div>
</div>
<!--  -->

</div>
@endif
     @endforeach 



</div>


      

      </div>
@endsection

@push('js')


@endpush
  
