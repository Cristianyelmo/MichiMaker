<header class="shadow-md  border-b-[7px] border-black bg-[#EFC8FD] p-[10px]">

@if(auth()->check())
    @if(auth()->user()->rol_id == 1)
        <div class="flex flex-col items-center mb-[15px] lg:flex-row lg:space-x-4 lg:justify-center ">
        <img src="/img-assets/pixelCAT.png" class="lg:w-[350px]" alt="">
        <a href="/" class="text-white text-stroke">inicio</a>
        <div class="flex space-x-2">
    <img src="/img-assets/profile.png" class="w-[50px] h-[40px]" alt="">
<a href="/" class="text-white text-stroke">Hola {{auth()->user()->name}}</a>
</div>
        <a class="text-stroke text-center" href="{{ route('logout') }}">Logout</a> 
        </div>
    @elseif(auth()->user()->rol_id == 2)

        <div class="flex flex-col items-center mb-[15px] lg:flex-row lg:space-x-4 lg:justify-center">
        <img src="/img-assets/pixelCAT.png" class="lg:w-[350px]" alt="">
<a href="/" class="text-white text-stroke">inicio</a>
<a href="/gatos" class="text-white text-stroke">Crear michi</a>
<div class="flex space-x-2">
    <img src="/img-assets/profile.png" class="w-[50px] h-[40px]" alt="">
<a href="/" class="text-white text-stroke">Hola {{auth()->user()->name}}</a>
</div>
<a class="text-white text-stroke" href="{{ route('logout') }}">Logout</a> 
    </div>
       
    @else
        michi make
    @endif
@else
   <div class="flex flex-col items-center mb-[15px] lg:flex-row lg:space-x-4 lg:justify-center">
   <img src="/img-assets/pixelCAT.png" class="lg:w-[350px]" alt="">
<a href="/" class="text-white text-stroke">inicio</a>
    <a href="/login" class="text-white text-stroke">crear michi</a>
    </div>
@endif


    </header>