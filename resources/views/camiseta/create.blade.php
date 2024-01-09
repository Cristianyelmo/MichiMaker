@extends('template')
@section('title','tu michis')
@push('css')

@endpush
@section('admin')
<div class="">
  <form action="{{ route('camisetas.store') }}" method="post" enctype='multipart/form-data'>
  @csrf
<div class="flex flex-col items-center mt-[30px]">



<label for="" >
  <input type="file" name="image" class="hidden" id="fileInput">
<div class="relative m-[30px] cursor-pointer " id="openFileInput">
<div class="border-black border-4 w-[200px] h-[200px] contenedor">
<img src="/img/photo.jpg" id="uploadedImage" alt="">
</div>
<div class="bg-black  w-[200px] h-[200px] cuadrado-negro"></div>
     
<!-- crud -->

<!--  -->

</div>

</label>
@error('image')
<small class='text-danger'>{{'*'.$message}}</small>

@enderror



  <div class="ml-[30px] relative">
<input type="text" name="nombre" class="outline-none border border-4 border-black p-2 w-[460px] contenedor-2">
<div class=" w-[460px] bg-black h-[50px] cuadrado-negro-2"></div>
</div>
@error('nombre')
<small class='text-danger'>{{'*'.$message}}</small>

@enderror
 
<div class="relative mt-[30px]">
<button type="submit" class="w-[90px]  h-[60px]   border border-black border-4 mt-[40px] rounded-full contenedor-3">Crear</button>
<div class="w-[90px]  h-[60px]   bg-black  rounded-full cuadrado-negro-3"></div>
</div> 

</form>


      </div>

      @endsection

@push('js')
<script>
    // Obtén el div y el input por sus ID
    const openFileInput = document.getElementById('openFileInput');
    const fileInput = document.getElementById('fileInput');
    const uploadedImage = document.getElementById('uploadedImage');
    // Agrega un evento de clic al div para activar el input de archivo
    openFileInput.addEventListener('click', () => {
      fileInput.click();
      console.log('hoola')
      
      
    })

    fileInput.addEventListener('change', () => {
      const file = fileInput.files[0];

      if (file) {
        // Crear un objeto FileReader para leer el archivo como una URL de datos
        const reader = new FileReader();

        // Configurar el evento de carga para actualizar la imagen una vez que se haya cargado
        reader.onload = function (e) {
          console.log(e)
          uploadedImage.src = e.target.result;
          uploadedImage.classList.remove('hidden'); // Mostrar la imagen
        };

        // Leer el archivo como una URL de datos
        reader.readAsDataURL(file);
      }
    });
    // Agrega un evento de cambio al input de archivo para manejar la selección del archivo
    
      // Puedes realizar acciones adicionales aquí, por ejemplo, mostrar el nombre del archivo seleccionado
      

     



  </script>

@endpush



    

