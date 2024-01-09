@extends('template')
@section('title','crea tus michis')
@push('css')

@endpush
@section('user')




    
    <div class="border-4 border-black w-[300px] h-[300px] relative" id="miDiv">
    @foreach ($sombreros as $item)
    @if($gato->sombrero_id == $item->id)
                <img src="/img/{{$item->nombre}}.png" alt="" class="z-30 w-[300px] h-[300px] absolute" id="imgSombrero">
                @endif
                @endforeach
   
    @foreach ($gafas as $item)
    @if($gato->gafa_id == $item->id)
                <img src="/img/{{$item->nombre}}.png" alt="" class="z-20 w-[300px] h-[300px] absolute" id="imgGafas">
                @endif
                @endforeach
                @foreach ($expresions as $item)
    @if($gato->expresion_id == $item->id)
                <img src="/img/{{$item->nombre}}.png" alt="" class="z-10 w-[300px] h-[300px] absolute" id="imgExpresion">
                @endif
                @endforeach
                @foreach ($camisetas as $item)
    @if($gato->camiseta_id == $item->id)
                <img src="/img/{{$item->nombre}}.png" alt="" class="z-30 w-[300px] h-[300px] absolute" id="imgCamiseta">
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

            <select name="expresion_id" id="expresions_id" class="form-control">
            @foreach ($expresions as $item)
            @if($gato->expresion_id == $item->id)
                    <option selected value="{{$item->id}}"  data-info-4="{{$item->nombre}}" {{ old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>
                    @else

                    <option value="{{$item->id}}"  data-info-4="{{$item->nombre}}" {{ old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>
                    @endif
                    @endforeach
            </select>

            <select name="sombrero_id" id="sombreros_id" class="form-control">
            @foreach ($sombreros as $item)
            @if($gato->sombrero_id == $item->id)
                    <option selected value="{{$item->id}}"  data-info-3="{{$item->nombre}}" {{ old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>
                    @else

                    <option value="{{$item->id}}"  data-info-3="{{$item->nombre}}" {{ old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>
                    @endif
                    @endforeach
            </select>

            <select name="camiseta_id" id="camisetas_id" class="form-control">
            @foreach ($camisetas as $item)
            @if($gato->camiseta_id == $item->id)
                    <option selected value="{{$item->id}}"  data-info-5="{{$item->nombre}}" {{ old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>
                    @else

                    <option value="{{$item->id}}"  data-info-5="{{$item->nombre}}" {{ old('color_id')== $item->id ? 'selected': '' }}>{{$item->nombre}}</option>
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
    <script src="/js/imagen-select.js">

/* gjjf*/

</script>


@endpush
