<header class="border-4 border-black">

@if(auth()->check())
    @if(auth()->user()->rol_id == 1)
        michi maker admin
        <a class="" href="{{ route('logout') }}">Logout</a> admin
    @elseif(auth()->user()->rol_id == 2)
        michi make user
        <a class="" href="{{ route('logout') }}">Logout</a> user <p></p>
    @else
        michi make
    @endif
@else
    michi make sale 

    <a href="/login">Iniciar sesion</a>
@endif


    </header>