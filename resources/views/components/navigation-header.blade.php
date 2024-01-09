<header class="shadow-md  border-b-[7px] border-black bg-[#EFC8FD] p-[10px]">
<img src="/img-assets/pixelCAT.png" alt="">
@if(auth()->check())
    @if(auth()->user()->rol_id == 1)
        <div class="flex flex-col items-center ">
        <a href="/" class="text-white text-stroke">inicio</a>
<a href="/" class="text-white text-stroke">Hola {{auth()->user()->name}}</a>
        <a class="text-stroke text-center" href="{{ route('logout') }}">Logout</a> 
        </div>
    @elseif(auth()->user()->rol_id == 2)

        <div class="flex flex-col items-center mb-[15px]">
<a href="/" class="text-white text-stroke">inicio</a>
<a href="/" class="text-white text-stroke">Hola {{auth()->user()->name}}</a>
<a class="text-white text-stroke" href="{{ route('logout') }}">Logout</a> 
    </div>
       
    @else
        michi make
    @endif
@else
   <div class="flex flex-col items-center mb-[15px]">
<a href="/" class="text-white text-stroke">inicio</a>
    <a href="/login" class="text-white text-stroke">crear michi</a>
    </div>
@endif


    </header>