@extends('layout.layout')

@section('page_title', 'Редактирование: ' . $product->title)

@section('content')
    <section class="main">
        <div class="container">
            <form action="{{ route('product.update', $product) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Название:</label>
                    @error('title')
                    {{ $message }}
                    @enderror
                    <input type="text" name="title" id="title" value="{{ $product->title }}">
                </div>
                <div class="form-group">
                    <label for="description">Описание:</label>
                    @error('description')
                    {{ $message }}
                    @enderror
                    <textarea name="description" id="description">{{ $product->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="price">Цена:</label>
                    @error('price')
                    {{ $message }}
                    @enderror
                    <input type="text" name="price" id="price" value="{{ $product->price }}">
                </div>
                <style>
                    .image-preview {
                        height: 400px;
                    }

                    .image-preview img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                    }
                </style>
                <div class="image-preview">
                    <img src="{{ $product->image_url }}" alt="{{ $product->title }}">
                </div>

                <div class="form-group">
                    <label for="photo">Загрузить фото:</label>
                    <input type="file" name="photo" id="photo">
                </div>

                <br/>

                <button class="button">Обновить</button>
            </form>
        </div>
    </section>
@endsection
