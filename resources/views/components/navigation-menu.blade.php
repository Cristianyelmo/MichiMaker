



      <div class=" w-1/4 h-screen border-4 border-black">

    


      @if(auth()->check())
    @if(auth()->user()->rol_id === 1)
    <h1>  Accesorios</h1>
<a href="">Lentes</a>
<a href="{{route('gafas.index')}}">Gafas</a>
<a href="{{route('colors.index')}}">Colors</a>
<a href="{{route('expresions.index')}}">expresions</a>
<a href="{{route('sombreros.index')}}">sombrero</a>


    @elseif(auth()->user()->rol_id === 2)
    <h1> gato user</h1>
    @else
        michi make
    @endif
@else
    michi make sale
@endif

</div>