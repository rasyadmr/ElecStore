@extends('template.layout')

@section('content')
<x-header>About Us</x-header>
<section class="bg-white py-24 sm:py-32 dark:bg-dark1">
    <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
        <div class="max-w-2xl">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl dark:text-white">Meet our Team</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-200">This project is presented for Web Programming course in Bina Nusantara University</p>
        </div>
        <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
            <li>
                <div class="flex items-center gap-x-6">
                    {{-- <img class="h-16 w-16 rounded-full" src="{{ asset('assets/images/users/rasyadmr.png') }}" alt=""> --}}
                    <div>
                        <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900 dark:text-white">Gregory Nicolla</h3>
                        <p class="text-sm font-semibold leading-6 text-indigo-600 dark:text-gray-400">2501962340</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex items-center gap-x-6">
                    {{-- <img class="h-16 w-16 rounded-full" src="{{ asset('assets/images/users/rasyadmr.png') }}" alt=""> --}}
                    <div>
                        <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900 dark:text-white">Zaphenath Paneah Joseph Irawan</h3>
                        <p class="text-sm font-semibold leading-6 text-indigo-600 dark:text-gray-400">2501961520</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex items-center gap-x-6">
                    {{-- <img class="h-16 w-16 rounded-full" src="{{ asset('assets/images/users/rasyadmr.png') }}" alt=""> --}}
                    <div>
                        <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900 dark:text-white">Raden Mas Bagus Mahesa Amandira</h3>
                        <p class="text-sm font-semibold leading-6 text-indigo-600 dark:text-gray-400">2502033986</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex items-center gap-x-6">
                    {{-- <img class="h-16 w-16 rounded-full" src="{{ asset('assets/images/users/rasyadmr.png') }}" alt=""> --}}
                    <div>
                        <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900 dark:text-white">Rasyad Muhammad Ramdhanazuri</h3>
                        <p class="text-sm font-semibold leading-6 text-indigo-600 dark:text-gray-400">2501992305</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex items-center gap-x-6">
                    {{-- <img class="h-16 w-16 rounded-full" src="{{ asset('assets/images/users/rasyadmr.png') }}" alt=""> --}}
                    <div>
                        <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900 dark:text-white">Yeremia Alexander Marojahan Pane</h3>
                        <p class="text-sm font-semibold leading-6 text-indigo-600 dark:text-gray-400">2502041615</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
@endsection