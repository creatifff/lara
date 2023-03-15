@extends('layout.layout')

@section('page_title', 'Главная')

@section('content')
    <div id="main">

        @if(count($products))

            @foreach($products as $product)
                <!-- Post -->
                <article class="post">
                    <header>
                        <div class="title">
                            <h2><a href="{{ route('product.single', $product) }}">{{ $product->title }}</a></h2>
                            <p>{{ $product->description }}</p>
                        </div>
                    </header>

                    <a href="single.html" class="image featured">
                        <img src="{{ $product->image_url }}" alt="product_img"/>
                    </a>

                    <p>{{ $product->price }}</p>
                </article>
            @endforeach

        @else
            <h2>На данный момент постов нет!</h2>
        @endif

    </div>
@endsection
