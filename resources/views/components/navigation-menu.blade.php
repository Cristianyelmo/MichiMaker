



      <div class=" w-1/4 h-screen border-4 border-black">

    


      @if(auth()->check())
    @if(auth()->user()->id === 1)
    <h1>  Accesorios</h1>
<a href="">Lentes</a>
<a href="{{route('gafas.index')}}">Gafas</a>
<a href="{{route('colors.index')}}">Colors</a>

<a href="">Expresion</a>
    @elseif(auth()->user()->id === 2)
    <h1> gato user</h1>
    @else
        michi make
    @endif
@else
    michi make sale
@endif

</div>