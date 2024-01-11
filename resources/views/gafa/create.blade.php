@extends('template')
@section('title','tu michis')
@push('css')

@endpush
@section('admin')
<div class="">
  <form action="{{ route('gafas.store') }}" method="post" enctype='multipart/form-data'>
  @csrf
<div class="flex flex-col items-center mt-[30px]">



<label for="" >
  <input type="file" name="image" class="hidden" id="fileInput">
<div class="relative m-[30px] cursor-pointer " id="openFileInput">
<div class="border-black border-4 w-[200px] h-[200px] contenedor">
  <div class="flex justify-center">
<img src="/img-assets/sucess.gif" id="uploadedImage" alt="">
</div>
<p class="text-center" id="text-photo">haz click para subir una foto</p>
</div>
<div class="bg-black  w-[200px] h-[200px] cuadrado-negro"></div>
     
<!-- crud -->

<!--  -->

</div>

</label>
@error('image')
<small class='text-danger'>{{'*'.$message}}</small>

@enderror



<div class=" relative">
<input type="text" name="nombre" class="outline-none border border-4 border-black w-[320px] p-[7px]   contenedor-2">
<div class=" w-[320px] bg-black h-[50px] cuadrado-negro-2"></div> 
</div>
@error('nombre')
<small class='text-danger mt-[20px]'>{{'*'.$message}}</small>

@enderror
 
<div class="relative mb-[30px]">
<button type="submit" class="w-[90px]  h-[60px] bg-white  border border-black border-4 mt-[40px] rounded-full contenedor-3">Crear</button>
<div class="w-[90px]  h-[60px]   bg-black  rounded-full cuadrado-negro-3"></div>
</div> 
</form>


      </div>

      @endsection

@push('js')
<script src='/js/upload-image.js'>
    // Obtén el div y el input por sus ID
   
    // Agrega un evento de cambio al input de archivo para manejar la selección del archivo
    
      // Puedes realizar acciones adicionales aquí, por ejemplo, mostrar el nombre del archivo seleccionado
      

     



  </script>

@endpush



    

