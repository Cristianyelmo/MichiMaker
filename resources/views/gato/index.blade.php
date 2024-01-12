@extends('template')
@section('title','- tu michis')
@push('css')

@endpush
@section('user')

<p></p>
  
   
 <div class="">
<a href="https://michimaker-production.up.railway.app/gatos/create">
<div class="flex justify-center mt-[30px]">
    <div class="flex">
<div class="relative">
<button class="border border-solid border-4 border-black rounded-full w-[40px] h-[40px] contenedor-1">+</button>
<div class="bg-black rounded-full w-[40px] h-[40px] cuadrado-negro-1"></div>
</div>
<h1 class="ml-[15px] mt-[3px]">Crear michi</h1>
</div>
</a>

</div> 
<div class="container mx-auto bg-blue w-70 p-4">
      <div class="mx-auto flex flex-col items-center bg-blue w-70 h-full p-4 md:flex-row md:justify-center md:flex-wrap md:items-center">
  @foreach($gatos as $gato) 
     @if($gato->user->id == auth()->user()->id)
      <div class="relative m-[30px] ">
        
<div class="border-black border-4 w-[200px] h-[200px] contenedor relative">
 
<img src="https://michimaker-production.up.railway.app/storage/img/{{$gato->sombrero->accesorio->image}}" alt="" class="z-30 w-[200px] h-[200px] absolute" id="imgSombrero">
  <img src="https://michimaker-production.up.railway.app/storage/img/{{$gato->gafa->accesorio->image}}" alt="" class=" z-20 w-[200px] h-[200px] absolute" id="imgGafas">
  <img src="https://michimaker-production.up.railway.app/storage/img/{{$gato->expresion->accesorio->image}}" alt="" class="z-10 w-[200px] h-[200px] absolute" id="imgExpresion">
  <img src="https://michimaker-production.up.railway.app/storage/img/{{$gato->camiseta->accesorio->image}}" alt="" class="z-10 w-[200px] h-[200px] absolute" id="imgExpresion">
                <img src="https://michimaker-production.up.railway.app/storage/img/{{$gato->color->accesorio->image}}" alt="" class="w-[200px] h-[200px]" id="imgColor">
</div>
<div class="bg-black  w-[200px] h-[200px] cuadrado-negro"></div>
     
<!-- crud -->
<p class="text-center mt-[20px]">{{$gato->nombre}}</p>
<div class="flex justify-center space-x-3 mt-[20px]">



<div class="border-black border-4 w-[30px] h-[30px] bg-[#008000] text-white flex justify-center">

  <a href="{{ url('https://michimaker-production.up.railway.app/gatos/edit', ['gato' => $gato->id]) }}"><i class="fa-solid fa-pen-to-square"></i></a>
</div>
<div class="border-black border-4 w-[30px] h-[30px] bg-[#f52626] text-white flex justify-center">
<form action="{{ url('/gatos/delete', ['gato' => $gato->id]) }}" method="post" id="deleteForm">
                        @method('DELETE')
                        @csrf
                    <button type='button' onclick="confirmDelete()" class="btn btn-primary"><i class="fa-solid fa-trash"></i></button>
                    </form>
</div>
</div>
<!--  -->

</div>
@endif
     @endforeach 





</div>
</div> 



<!--  -->




<!--  -->

      </div>
@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
      
    function confirmDelete() {
        Swal.fire({
            title: `¿Seguro que quieres eliminar el michi ?`,
        
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
    
    @if(session('success'))

    let message  = "{{session('success')}}";
Swal.fire({
      title: `${message}`,
      html: '<div style="display: flex; justify-content: center; align-items: center;"><img src="/img-assets/sucess.gif" alt="Imagen"></div>',
      confirmButtonText: 'Aceptar'
    });
  
@endif

@if(session('no-success'))

let message  = "{{session('no-success')}}";

Swal.fire({
  title: `${message}`,
  html: '<div style="display: flex; justify-content: center; align-items: center;"><img src="/img-assets/no-sucess.gif" alt="Imagen"></div>',
  confirmButtonText: 'Aceptar'
});

@endif
</script>
@endpush
  
