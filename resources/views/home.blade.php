@extends('template.layout')

@section('content')
<section class="bg-center bg-no-repeat bg-[url('https://www.parkerpawn.com/wp-content/uploads/2023/08/electronic-gadgets.jpeg')] bg-gray-700 bg-blend-multiply rounded-lg">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">The largest electronic store in Indonesia*</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">You can find any electronics that you want here and get a free-delivery to all continents in Indonesia.</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="/register" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-500">
                Sign Up
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
            <a href="/login" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400 backdrop-blur">
                Sign In
            </a>  
        </div>
    </div>
</section>

<div>
    <h1 class="text-3xl my-5 font-bold text-black dark:text-white">Newest Products</h1>
    <hr>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        @if ($newests->isEmpty())
            <p class="font-light text-sm text-gray-600 text-center md:col-span-2 lg:col-span-4 my-4">No items here</p>
        @else
            @foreach ($newests as $newest)
                <x-product.card :product="$newest"/>
            @endforeach
        @endif
    </div>
</div>

<div>
    <h1 class="text-3xl my-5 font-bold text-black dark:text-white">Most Rating</h1>
    <hr>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        @if ($ratings->isEmpty())
            <p class="font-light text-sm text-gray-600 text-center md:col-span-2 lg:col-span-4 my-4">No items here</p>
        @else
            @foreach ($ratings as $rating)
                <x-product.card :product="$rating"/>
            @endforeach
        @endif
    </div>
    <div class="w-full flex justify-center mt-5">
        <a href="/product" class="m-auto p-auto">
            <button class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800 shadow">
                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                View all products
                </span>
            </button>
        </a>
    </div>
</div>
@endsection