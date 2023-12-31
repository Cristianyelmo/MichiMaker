@extends('template')
@section('title','crea tus michis')
@push('css')

@endpush
@section('user')
    <div class="border-4 border-black w-[300px] h-[300px] relative" id="miDiv">
                <img src="" alt="" class="w-[300px] h-[300px] absolute" id="imgGafas">
                <img src="" alt="" class="w-[300px] h-[300px]" id="imgColor">
            </div>
        <form  action="{{ route('gatos.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            

          <!--   <input type="file" name="image" id="imageInput" accept="image/*" class="hidden"> -->

            <select name="color_id" id="presentacione_id" class="form-control">
                @foreach ($colors as $item)
                    <option value="{{$item->id}}"  data-info="{{$item->nombre}}" {{ old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>
                @endforeach
            </select>

            <select name="gafas_id" id="gafas_id" class="form-control">
                @foreach ($gafas as $item)
                    <option value="{{$item->id}}" data-info-2="{{$item->nombre}}" {{ old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>
                @endforeach
            </select>

            <button type="submit">Capturar Imagen</button>
        </form>

       
    </div>
    @endsection

@push('js')
<script>

  /* gjjf*/

  var nombreImagen = document.getElementById('presentacione_id');
   var imgColor = document.getElementById('imgColor');

   nombreImagen.addEventListener('change', function() {
      // Obtener el valor seleccionado del elemento select
      /* var nombreImagenxd = nombreImagen.value;
 */


      var opcionSeleccionada = nombreImagen.options[nombreImagen.selectedIndex];

// Obtén el valor y la información personalizada

var infoPersonalizada = opcionSeleccionada.getAttribute("data-info");








     imgColor.src= `/img/${infoPersonalizada}.png`
    });


    var nombreImagen2 = document.getElementById('gafas_id');
   var imgGafas = document.getElementById('imgGafas');

   nombreImagen2.addEventListener('change', function() {
      // Obtener el valor seleccionado del elemento select
     /*  var nombreImagenxd2 = nombreImagen2.value; */
      var opcionSeleccionada = nombreImagen2.options[nombreImagen2.selectedIndex];

// Obtén el valor y la información personalizada

var infoPersonalizada = opcionSeleccionada.getAttribute("data-info-2");
     imgGafas.src= `/img/${infoPersonalizada}.png`
    });

  /* hjgjg */
 
</script>

@endpush



