@extends('template.layout')

@section('content')
<x-header>Checkout</x-header>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg my-20">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-16 py-3">
                    <span class="sr-only">Image</span>
                </th>
                <th scope="col" class="px-6 py-3">
                    Product
                </th>
                <th scope="col" class="px-6 py-3">
                    Qty
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
            </tr>
        </thead>
        <tbody>
            @if (session('cart'))
                @foreach (session('cart') as $id => $details)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="p-4">
                            <img src="{{ asset('storage/'.$details['photo']) }}" class="w-16 md:w-32 max-w-full max-h-full" alt="{{ $details['name'] }}">
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                            {{ $details['name'] }}
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                            {{ $details['quantity'] }}
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                            {{ $details['price'] }}
                        </td>
                    </tr>
                @endforeach
            @else
            <tr>
                <td colspan="5" class="px-6 py-4 text-center">No products in cart</td>
            </tr>
            @endif
        </tbody>
    </table>

    <div class="flex flex-col items-center justify-center py-8 mx-auto lg:py-5">
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-auto space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Verify your account details
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{ route('checkout.paid') }}" method="POST">
                    @csrf
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium
                        @error('name')
                            text-red-700 dark:text-red-500
                        @else
                            text-gray-900 dark:text-white
                        @enderror">Full name</label>
                        <input type="text" name="name" id="name" placeholder="Full Name" class="
                        @error('name')
                            bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500
                        @else
                            bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                        @enderror
                        " placeholder="username" value="{{ old('name', auth()->user()->name) }}" disabled required>
                        @error('name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium 
                        @error('email')
                            text-red-700 dark:text-red-500
                        @else
                            text-gray-900 dark:text-white
                        @enderror">Email</label>
                        <input type="email" name="email" id="email" placeholder="user@email.com" class="
                        @error('email')
                            bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500
                        @else
                            bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                        @enderror
                        " value="{{ old('email', auth()->user()->email) }}" disabled required>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="phonenumber" class="block mb-2 text-sm font-medium 
                        @error('phonenumber')
                            text-red-700 dark:text-red-500
                        @else
                            text-gray-900 dark:text-white
                        @enderror">Phone Number</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                                    <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
                                </svg>
                            </div>
                            <input type="text" name="phonenumber" id="phonenumber" aria-describedby="helper-text-explanation" class="
                            @error('phonenumber')
                                bg-red-50 border border-red-300 text-red-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full ps-10 p-2.5 dark:bg-red-700 dark:border-red-600 dark:placeholder-red-400 dark:text-red dark:focus:ring-red-500 dark:focus:border-red-500
                            @else
                                bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                            @enderror
                            " placeholder="081234567890" value="{{ old('phonenumber', auth()->user()->phonenumber) }}" disabled required />
                        </div>
                        @error('phonenumber')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>                        
                        <label for="address" class="block mb-2 text-sm font-medium 
                        @error('address')
                            text-red-700 dark:text-red-500
                        @else
                            text-gray-900 dark:text-white
                        @enderror">Address</label>
                        <textarea id="address" name="address" rows="4" class="
                        @error('address')
                            block p-2.5 w-full text-sm text-red-900 bg-red-50 rounded-lg border border-red-300 focus:ring-red-500 focus:border-red-500 dark:bg-red-700 dark:border-red-600 dark:placeholder-red-400 dark:text-red dark:focus:ring-red-500 dark:focus:border-red-500
                        @else
                            block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                        @enderror
                        "  placeholder="Address...">{{ old('address', auth()->user()->address) }}</textarea>
                        @error('address')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Checkout</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection