@extends('layouts.master')

@section('title', $data['title'])

@section('content')

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-12">

                <h1>Available products</h1>

                <ul>

                    @foreach ($data['products'] as $key => $product)

                        <li>

                            Id: {{ $key }} -

                            Name: {{ $product['name'] }} -

                            Price: {{ $product['price'] }} -

                            <a href="{{ route('cart.add', ['id' => $key]) }}">Add to cart</a>

                        </li>

                    @endforeach

                </ul>

            </div>

        </div>

        <div class="row justify-content-center">

            <div class="col-md-12">

                <h1>Products in cart</h1>

                <ul>

                    @foreach ($data['productsInCart'] as $key => $product)

                        <li>

                            Id: {{ $key }} -

                            Name: {{ $product['name'] }} -

                            Price: {{ $product['price'] }}

                        </li>

                    @endforeach

                </ul>

                <a href="{{ route('cart.removeAll') }}">Remove all products from cart</a>

            </div>

        </div>

    </div>

@endsection
