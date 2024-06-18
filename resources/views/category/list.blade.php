@extends('template.layout')

@section('content')
    <x-header>Category</x-header>

    <div class="my-5 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4">
        @if ($categories->isEmpty())
            <p class="font-light text-sm text-gray-600 text-center md:col-span-2 lg:col-span-4 my-4">No items here</p>
        @else
            @foreach ($categories as $category)
                <x-category.card :category="$category"/>
            @endforeach
        @endif
    </div>
@endsection