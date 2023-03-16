@extends('layout.layout')

@section('page_title', 'Добавить продукт')

@section('content')
    <section class="main">
        <div class="container">
            <form action="{{ route('product.create') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Название:</label>
                    @error('title')
                    {{ $message }}
                    @enderror
                    <input type="text" name="title" id="title">
                </div>
                <div class="form-group">
                    <label for="description">Описание:</label>
                    @error('description')
                    {{ $message }}
                    @enderror
                    <textarea name="description" id="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Цена:</label>
                    @error('price')
                    {{ $message }}
                    @enderror
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
