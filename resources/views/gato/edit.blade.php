@extends('template')
@section('title','crea tus michis')
@push('css')

@endpush
@section('user')




    <div class="w-1/4 h-screen border-4 border-black">
        <h1>Accesorios</h1>
        <a href="">Lentes</a>
        <a href="{{route('colors.index')}}">Colors</a>
        <a href="{{route('gafas.index')}}">Gafas</a>
        <a href="">Expresion</a>
    </div>

    <div>
    <div class="border-4 border-black w-[300px] h-[300px] relative" id="miDiv">
    @foreach ($gafas as $item)
    @if($gato->gafa_id == $item->id)
                <img src="/img/{{$item->nombre}}.png" alt="" class="w-[300px] h-[300px] absolute" id="imgGafas">
                @endif
                @endforeach


                @foreach ($colors as $item)
    @if($gato->color_id == $item->id)
                <img src="/img/{{$item->nombre}}.png" alt="" class="w-[300px] h-[300px]" id="imgColor">
                @endif
                @endforeach
            </div>
        <form  action="{{ route('gatos.update',['gato'=>$gato]) }}" method="post" enctype="multipart/form-data">
        @method('PATCH')
            @csrf

            

          <!--   <input type="file" name="image" id="imageInput" accept="image/*" class="hidden"> -->
<input type="text" name="name"  value="{{old('name',$gato->nombre)}}">
@error('name')
<small class='text-danger'>{{'*'.$message}}</small>

@enderror
            <select name="color_id" id="presentacione_id" class="form-control">
                @foreach ($colors as $item)


                @if($gato->color_id == $item->id)
                    <option selected value="{{$item->id}}"  data-info="{{$item->nombre}}" {{ old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>
                    @else

                    <option value="{{$item->id}}"  data-info="{{$item->nombre}}" {{ old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>
                    @endif
                @endforeach
            </select>
            @error('color_id')
<small class='text-danger'>{{'*'.$message}}</small>

@enderror
            <select name="gafas_id" id="gafas_id" class="form-control">
            @foreach ($gafas as $item)
            @if($gato->gafa_id == $item->id)
                    <option selected value="{{$item->id}}"  data-info-2="{{$item->nombre}}" {{ old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>
                    @else

                    <option value="{{$item->id}}"  data-info-2="{{$item->nombre}}" {{ old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>
                    @endif
                    @endforeach
            </select>
            @error('gafas_id')
<small class='text-danger'>{{'*'.$message}}</small>

@enderror
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
