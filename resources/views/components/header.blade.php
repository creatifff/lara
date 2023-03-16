@php use Illuminate\Support\Facades\Auth; @endphp
<div class="container">
    <header>
        <a href="{{ route('home') }}">
            <div class="logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                <h1>Creative<br>Gift</h1>
            </div>
        </a>
        <nav>
            <a href="{{ route('home') }}">Главная</a>
            <a href="#">Новинки</a>
            <a href="#">Sale</a>
            <a href="#">Каталог</a>
        </nav>
        <div class="buttons">
            @guest
                <a href="{{ route('signup') }}">
                    <img src="{{ asset('assets/icons/user-solid.svg') }}" alt="reg">
                </a>
                <a href="{{ route('signin') }}">
                    <img src="{{ asset('assets/icons/auth.svg') }}" alt="auth">
                </a>
            @endguest
            @auth
                <a href="/">{{ Auth::user()->username }}</a>
                <a href="{{ route('auth.logout') }}">Выход</a>
            @endauth
        </div>
    </header>
</div>
<div style="height: 1px; background-color: #e5e7eb; width: 100%;"></div>
