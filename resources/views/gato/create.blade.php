@extends('template')
@section('title','crea tus michis')
@push('css')
@if(old('data-info-2'))
    {{ dd(old('data-info-2')) }}
@endif
@endpush
@section('user')
    <div class="border-4 border-black w-[300px] h-[300px] relative" id="miDiv">
       
                <img src="/img/sin-eso.png" alt="" class="z-30 w-[300px] h-[300px] absolute" id="imgSombrero">
     <img src="/img/sin-eso.png" alt="" class="z-20 w-[300px] h-[300px] absolute" id="imgGafas"> 
           
                <img src="/img/sin-eso.png" alt="" class="z-10 w-[300px] h-[300px] absolute" id="imgExpresion">
                <img src="/img/sin-eso.png" alt="" class="z-10 w-[300px] h-[300px] absolute" id="imgCamiseta">
                <img src="/img/sin-eso.png" alt="" class="w-[300px] h-[300px]" id="imgColor">
            </div>
        <form  action="{{ route('gatos.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <input type="text" name="name">
            @error('name')
<small class='text-danger'>{{'*'.$message}}</small>

@enderror
          <!--   <input type="file" name="image" id="imageInput" accept="image/*" class="hidden"> -->

            <select name="color_id" id="presentacione_id" class="form-control"required>
            <option value="" disabled selected hidden>Selecciona</option>
                @foreach ($colors as $item)
                    <option value="{{$item->id}}"  data-info="{{$item->nombre}}"  >{{$item->nombre}}</option>
                @endforeach
            </select>
            @error('color_id')
<small class='text-danger'>{{'*'.$message}}</small>

@enderror
            <select name="gafas_id" id="gafas_id" class="form-control">
            <option value="" disabled selected hidden>Selecciona</option>
                @foreach ($gafas as $item)
                    <option value="{{$item->id}}" data-info-2="{{$item->nombre}}" >{{$item->nombre}}</option>
                @endforeach
            </select>
      




<select name="sombrero_id" id="sombreros_id" class="form-control" >
            <option value="" disabled selected hidden>Selecciona</option>
                @foreach ($sombreros as $item)
                    <option value="{{$item->id}}"  data-info-3="{{$item->nombre}}" >{{$item->nombre}}</option>
                @endforeach
            </select>

            <select name="camiseta_id" id="camisetas_id" class="form-control" >
            <option value="" disabled selected hidden>Selecciona</option>
                @foreach ($camisetas as $item)
                
                    <option value="{{$item->id}}"  data-info-5="{{$item->nombre}}" >{{$item->nombre}}</option>
                @endforeach
            </select>
       


<select name="expresion_id" id="expresions_id" class="form-control" required>
            <option value="" disabled selected hidden>Selecciona</option>
                @foreach ($expresions as $item)
                    <option value="{{$item->id}}"  data-info-4="{{$item->nombre}}" >{{$item->nombre}}</option>
                @endforeach
            </select>
            @error('expresion_id')
<small class='text-danger'>{{'*'.$message}}</small>

@enderror


            <button type="submit">Capturar Imagen</button>
        </form>

       
    </div>
    @endsection

@push('js')
<script src="/js/imagen-select.js">

  /* gjjf*/

</script>

@endpush



