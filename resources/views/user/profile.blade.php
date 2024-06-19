@extends('template.layout')

@section('content')
    <div class="p-8 bg-white shadow dark:bg-dark1">
        <div class="mt-20 text-center">
            <img class="mx-auto w-52 my-5 rounded" src="{{ asset('storage/'.$user->photo) }}" alt="{{ $user->name }}">
            <h1 class="text-4xl font-medium text-gray-700 dark:text-white">{{ $user->name }}</h1>
            <p class="font-light text-gray-600 mt-3 dark:text-gray-400">{{ $user->address }}</p>
            <p class="mt-4 text-gray-500 dark:text-gray-200">{{ $user->email }}</p>
            <p class="mt-2 text-gray-500 dark:text-gray-200">{{ $user->phonenumber }}</p>
        </div>
    </div>

    <div class="flex justify-between">
        <h1 class="text-3xl my-5 font-bold text-black dark:text-white">Products</h1>
        @if (auth()->user()->id === $user->id)
            <a href="/product/new" class="bg-dark3 hover:bg-blue-700 text-white rounded my-4 p-2">Add Product</a>
        @endif
    </div>
    <hr>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        @if ($user->products->isEmpty())
            <p class="font-light text-sm text-gray-600 text-center md:col-span-2 lg:col-span-4 my-4">No items here</p>
        @else
            @if (auth()->user()->id === $user->id)
                @foreach ($user->products as $product)
                    <x-product.card-owner :product="$product"/>
                @endforeach
            @else
                @foreach ($user->products as $product)
                    <x-product.card :product="$product"/>
                @endforeach
            @endif
        @endif
    </div>
@endsection