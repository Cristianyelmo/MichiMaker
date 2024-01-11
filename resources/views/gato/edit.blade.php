@extends('template')
@section('title','crea tus michis')
@push('css')
<style>
  

    .contenedor-7 {
      position: relative;
      
      background-color: white;
      z-index: 1; /* Asegura que el contenido esté por encima del cuadrado negro */
    }

    .cuadrado-negro-7 {
      position: absolute;
    top: 15px;
    40px: ;
    left: 17px;
    
    background-color: black;
    z-index: 0;
    }

  


  </style>
@endpush
@section('user')



<div class="lg:flex lg:justify-center">
<div class="flex flex-col items-center lg:justify-center">
    <div class="border-4 border-black w-[300px] h-[300px] relative" id="miDiv">
    @foreach ($sombreros as $item)
    @if($gato->sombrero_id == $item->id)
                <img src="https://michimaker-production.up.railway.app/storage/img/{{$item->nombre}}.png" alt="" class="z-30 w-[300px] h-[300px] absolute" id="imgSombrero">
                @endif
                @endforeach
   
    @foreach ($gafas as $item)
    @if($gato->gafa_id == $item->id)
                <img src="https://michimaker-production.up.railway.app/storage/img/{{$item->nombre}}.png" alt="" class="z-20 w-[300px] h-[300px] absolute" id="imgGafas">
                @endif
                @endforeach
                @foreach ($expresions as $item)
    @if($gato->expresion_id == $item->id)
                <img src="https://michimaker-production.up.railway.app/storage/img/{{$item->nombre}}.png" alt="" class="z-10 w-[300px] h-[300px] absolute" id="imgExpresion">
                @endif
                @endforeach
                @foreach ($camisetas as $item)
    @if($gato->camiseta_id == $item->id)
                <img src="https://michimaker-production.up.railway.app/storage/img/{{$item->nombre}}.png" alt="" class="z-30 w-[300px] h-[300px] absolute" id="imgCamiseta">
                @endif
                @endforeach
                @foreach ($colors as $item)
    @if($gato->color_id == $item->id)
                <img src="https://michimaker-production.up.railway.app/storage/img/{{$item->nombre}}.png" alt="" class="w-[300px] h-[300px]" id="imgColor">
                @endif
                @endforeach
            </div>
        <form  action="{{ route('gatos.update',['gato'=>$gato]) }}" method="post" enctype="multipart/form-data">
        @method('PATCH')
            @csrf

            

          <!--   <input type="file" name="image" id="imageInput" accept="image/*" class="hidden"> -->
          <div class="flex flex-col items-center text-center">
            <p class="mt-[10px] text-center">Nombre</p>
<input type="text" class="border-black border-4 p-4 m-[5px]" name="name"  value="{{old('name',$gato->nombre)}}">
@error('name')
<small class='text-danger'>{{'*'.$message}}</small>

@enderror
</div>
</div>
<div class="flex flex-col items-center">
<p>Color</p>
<div class="relative m-3">
            <select name="color_id" id="presentacione_id"  class="form-control p-4 border-black border-4 contenedor-7 outline-none" required>
                @foreach ($colors as $item)


                @if($gato->color_id == $item->id)
                    <option selected value="{{$item->id}}"  data-info="{{$item->nombre}}" {{ old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>
                    @else

                    <option value="{{$item->id}}"  data-info="{{$item->nombre}}" {{ old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>
                    @endif
                @endforeach
            </select>
            <div class="bg-black  w-[210px] h-[55px] cuadrado-negro-7"></div>
            </div>

            @error('color_id')
<small class='text-danger'>{{'*'.$message}}</small>

@enderror

<p>Gafas</p>
<div class="relative m-3">
            <select name="gafas_id" id="gafas_id"  class="form-control p-4 border-black border-4 contenedor-7 outline-none">
            @foreach ($gafas as $item)
            @if($gato->gafa_id == $item->id)
                    <option selected value="{{$item->id}}"  data-info-2="{{$item->nombre}}" {{ old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>
                    @else

                    <option value="{{$item->id}}"  data-info-2="{{$item->nombre}}" {{ old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>
                    @endif
                    @endforeach
            </select>
            <div class="bg-black  w-[210px] h-[55px] cuadrado-negro-7"></div>
            </div>

<!--  -->
            
<!--  -->

<p>Expresion</p>
<div class="relative m-3">
            <select name="expresion_id" id="expresions_id"  class="form-control p-4 border-black border-4 contenedor-7 outline-none">
            @foreach ($expresions as $item)
            @if($gato->expresion_id == $item->id)
                    <option selected value="{{$item->id}}"  data-info-3="{{$item->nombre}}" {{ old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>
                    @else

                    <option value="{{$item->id}}"  data-info-3="{{$item->nombre}}" {{ old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>
                    @endif
                    @endforeach
            </select>
            <div class="bg-black  w-[210px] h-[55px] cuadrado-negro-7"></div>
            </div>















            <p>Sombrero</p>

            <div class="relative m-3">
            <select name="sombrero_id" id="sombreros_id"  class="form-control p-4 border-black border-4 contenedor-7 outline-none">
            @foreach ($sombreros as $item)
            @if($gato->sombrero_id == $item->id)
                    <option selected value="{{$item->id}}"  data-info-3="{{$item->nombre}}" {{ old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>
                    @else

                    <option value="{{$item->id}}"  data-info-3="{{$item->nombre}}" {{ old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>
                    @endif
                    @endforeach
            </select>
            <div class="bg-black  w-[210px] h-[55px] cuadrado-negro-7"></div>
            </div>
            <p>Camiseta</p>
            <div class="relative m-3">
            <select name="camiseta_id" id="camisetas_id"  class="form-control p-4 border-black border-4 contenedor-7 outline-none">
            @foreach ($camisetas as $item)
            @if($gato->camiseta_id == $item->id)
                    <option selected value="{{$item->id}}"  data-info-5="{{$item->nombre}}" {{ old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>
                    @else

                    <option value="{{$item->id}}"  data-info-5="{{$item->nombre}}" {{ old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>
                    @endif
                    @endforeach
            </select>
            <div class="bg-black  w-[210px] h-[55px] cuadrado-negro-7"></div>
            </div>


            @error('gafas_id')
<small class='text-danger'>{{'*'.$message}}</small>

@enderror
<button type="submit" class="bg-white border-black border-4 p-4 mt-[20px] mb-[20px]">Editar michi</button>
        </form>

       
    </div>
    @endsection
</div>
</div>

    @push('js')
    <script src="/js/imagen-select.js">

/* gjjf*/

</script>


@endpush
