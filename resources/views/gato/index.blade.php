@extends('template')
@section('title','- tu michis')
@push('css')

@endpush
@section('user')

@if(session('success'))
<script>
    let message  = "{{session('success')}}";
    console.log(message);
Swal.fire(`${message}`);

</script>
@endif
  
   
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

      <div class="flex flex-col items-center bg-blue w-70 h-full p-4 ">
  @foreach($gatos as $gato) 
     @if($gato->user->id == auth()->user()->id)
      <div class="relative m-[30px] ">
<div class="border-black border-4 w-[200px] h-[200px] contenedor relative">
 
<img src="/img/{{$gato->sombrero->accesorio->image}}" alt="" class="z-30 w-[200px] h-[200px] absolute" id="imgSombrero">
  <img src="/img/{{$gato->gafa->accesorio->image}}" alt="" class=" z-20 w-[200px] h-[200px] absolute" id="imgGafas">
  <img src="/img/{{$gato->expresion->accesorio->image}}" alt="" class="z-10 w-[200px] h-[200px] absolute" id="imgExpresion">
  <img src="/img/{{$gato->camiseta->accesorio->image}}" alt="" class="z-10 w-[200px] h-[200px] absolute" id="imgExpresion">
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
<form action="{{route('gatos.destroy',['gato'=>$gato->id])}}" method='post'  id="deleteForm">
                        @method('DELETE')
                        @csrf
                    <button type='button' onclick="confirmDelete()" class="btn btn-primary">B</button>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
      
    function confirmDelete() {
        Swal.fire({
            title: '¿Seguro que quieres eliminar el michi?',
        
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminalo :(',
            cancelButtonText: 'noou'
        }).then((result) => {
            if (result.isConfirmed) {
                // Envía el formulario si el usuario confirma
                document.getElementById('deleteForm').submit();
            }
        });
    }
</script>
@endpush
  
