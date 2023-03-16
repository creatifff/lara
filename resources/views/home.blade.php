@extends('layout.layout')

@section('page_title', 'Главная')

@section('content')
    <div class="container">
        <div class="products__title">
            <div>
                <h2>Все подарки</h2>
            </div>
            <div>
                <form id="search" method="get" action="/">
                    <label for="query"></label>
                    <input id="query" type="text" name="query" placeholder="Поиск"/>
                </form>
            </div>
        </div>
        <div class="products__wrapper">

            @if(count($products))

                @foreach($products as $product)
                    <div class="product">
                        <div class="header">
                            <p class="price">{{ $product->price }} ₽</p>
                            <a href="{{ route('product.single', $product) }}">
                                <img src="{{ $product->image_url }}" alt="{{ $product->title }}">
                            </a>
                        </div>
                        <div class="footer">
                            <a href="{{ route('product.single', $product) }}">
                                <p>
                                    {{ $product->title }}
                                </p>
                            </a>
                        </div>
                    </div>
                @endforeach

            @else
                <h3>По вашему запросу ничего найдено</h3>
            @endif
        </div>

        {{ $products->links('components.paginate') }}

    </div>
@endsection


{{-- осталось: слайдер, рег, автор, страница админки --}}

