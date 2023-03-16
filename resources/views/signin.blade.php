@extends('layout.layout')

@section('page_title', 'Авторизация')

@section('content')
    <section class="auth">
        <div class="container">
            <form action="{{ route('auth.signin') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="email">Введите Email:</label>
                    @error('email')
                    {{ $message }}
                    @enderror
                    <input type="email" name="email" id="email">
                </div>

                <div class="form-group">
                    <label for="password">Введите пароль:</label>
                    @error('password')
                    {{ $message }}
                    @enderror
                    <input type="password" name="password" id="password">
                </div>

                <br/>

                <button class="button">Войти</button>
            </form>
        </div>
    </section>
@endsection
