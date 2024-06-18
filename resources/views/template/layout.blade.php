@extends('template.root')

@section('body')
<x-navbar/>

<main class="bg-white shadow dark:bg-dark1">
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        @yield('content')
    </div>
</main>

<x-footer/>
@endsection

@section('root-script')
    @yield('script')
@endsection