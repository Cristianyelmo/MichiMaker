



     

    


      @if(auth()->check())
    @if(auth()->user()->rol_id === 1)
    <div class=" w-1/4 bg-black text-white border-black w-screen">
    <h1 class="text-center">  Accesorios</h1>
    <div class="flex flex-col items-center">
    <a href="{{route('camisetas.index')}}">Camisetas</a>
<a href="{{route('gafas.index')}}">Gafas</a>
<a href="{{route('colors.index')}}">Colors</a>
<a href="{{route('expresions.index')}}">expresions</a>
<a href="{{route('sombreros.index')}}">sombrero</a>
</div>
</div>

    @elseif(auth()->user()->rol_id === 2)
   
    @else
        
    @endif
@else
 
@endif

