@php use Illuminate\Support\Facades\Auth; @endphp
@extends('layout.layout')

@section('page_title', 'Главная')

@section('content')
    <div class="container">
        <div style="padding: 30px 0 10px;" class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="slider__image" src="{{ asset('assets/images/banner1.jpg') }}" alt="slide"/>
                </div>
                <div class="swiper-slide">
                    <img class="slider__image" src="{{ asset('assets/images/banner2.jpg') }}" alt="slide"/>
                </div>
                <div class="swiper-slide">
                    <img class="slider__image" src="{{ asset('assets/images/banner3.jpg') }}" alt="slide"/>
                </div>
            </div>
            <div style="background-color: #FFF;
    border-radius: 50%;
    padding: 10px;" class="swiper-button-next">▷>
            </div>
        </div>
        <div class="products__title">
            <div>
                <h2>Все подарки</h2>
            </div>
            @auth
                @if(Auth::user()->role === 'admin')
                    <a href="{{ route('product.create') }}">
                        Добавить продукт
                    </a>
                @endif
            @endauth
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
                            @auth
                                @if(Auth::user()->role === 'admin')
                                    <div class="admin-btns">
                                        <a style="padding: 6px; border-radius: 5px; color: #fff; background-color:#206da0;"
                                           href="{{ route('product.delete', $product) }}"
                                        >
                                            Убрать
                                        </a>
                                        <a style="padding: 6px; border-radius: 5px; color: #fff; background-color:#206da0;"
                                           href="{{ route('product.update', $product) }}"
                                        >
                                            Редактировать
                                        </a>
                                    </div>
                                @endif
                            @endauth
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

