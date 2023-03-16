@extends('layout.layout')

@section('page_title', 'Регистрация')

@section('content')
    <section class="auth">
        <div class="container">
            <form action="{{ route('auth.signup') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="email">Ваш Email:</label>
                    @error('email')
                    {{ $message }}
                    @enderror
                    <input type="email" name="email" id="email" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="username">Ваше имя или никнейм:</label>
                    @error('username')
                    {{ $message }}
                    @enderror
                    <input type="text" name="username" id="username" value="{{ old('username') }}">
                </div>

                <div class="form-group">
                    <label for="password">Придумайте пароль:</label>
                    @error('password')
                    {{ $message }}
                    @enderror
                    <input type="password" name="password" id="password">
                </div>

                <div class="form-group">
                    <label for="password">Повторите пароль:</label>
                    @error('re_password')
                    {{ $message }}
                    @enderror
                    <input type="password" name="re_password" id="password">
                </div>

                <div class="form-group">
                    <label for="photo">Выберите фото:</label>
                    <input type="file" name="photo" id="photo" value="{{ old('photo') }}">
                </div>

                <br/>

                <button class="button">Зарегистрироваться</button>
            </form>
        </div>
    </section>
@endsection
