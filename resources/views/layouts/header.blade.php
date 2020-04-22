@if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Acceuil</a>
        @else
            <a href="{{ route('login') }}">Se Connecter</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Inscrire</a>
            @endif
        @endauth
    </div>
@endif
