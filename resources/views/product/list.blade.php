{{-- @dd($categories) --}}
@extends('template.layout')

@section('content')
<x-header>Products</x-header>
<x-search :categories="$categories"/>

<section class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
    @if ($products->isEmpty())
        <p class="font-light text-sm text-gray-600 text-center md:col-span-2 lg:col-span-4 my-4">No items here</p>
    @else
        @foreach ($products as $product)
            <x-product.card :product="$product"/>
        @endforeach
    @endif
</section>
@endsection