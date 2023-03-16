@extends('layout.layout')

@section('page_title', 'Добавить продукт')

@section('content')
    <section id="main">
        <div class="container">
            {{--      Вывод ошибок      --}}
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <form action="{{ route('product.create') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Название:</label>
                    <input type="text" name="title" id="title">
                </div>
                <div class="form-group">
                    <label for="description">Описание:</label>
                    <textarea name="description" id="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Цена:</label>
                    <input type="text" name="price" id="price">
                </div>
                <div class="form-group">
                    <label for="photo">Загрузить фото:</label>
                    <input type="file" name="photo" id="photo">
                </div>

                <br/>

                <button class="button">Добавить</button>
            </form>
        </div>
    </section>
@endsection
