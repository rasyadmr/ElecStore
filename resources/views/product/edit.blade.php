@extends('template.root')

@section('body')
<section class="bg-gray-200 dark:bg-dark1">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto lg:py-5">
        <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <img class="w-8 h-8 mr-2" src="https://cdn.iconscout.com/icon/free/png-256/free-electric-showk-electrical-electricity-shock-wire-38949.png?f=webp" alt="logo">
            ElecStore
        </a>
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Edit Product
                </h1>
                <a href="{{ route('product.list') }}" class="text-blue-700 flex flex-row dark:text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 my-auto">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                    </svg>
                    <p class="my-auto ps-2">
                        Back
                    </p>
                </a>
                <form class="space-y-4 md:space-y-6" action="{{ route('product.update', ['product' => $product]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium
                        @error('name')
                            text-red-700 dark:text-red-500
                        @else
                            text-gray-900 dark:text-white
                        @enderror">Product Name</label>
                        <input type="text" name="name" id="name" placeholder="Full Name" class="
                        @error('name')
                            bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500
                        @else
                            bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                        @enderror
                        " placeholder="Name" value="{{ old('name', $product->name) }}" required>
                        @error('name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="price" class="block mb-2 text-sm font-medium 
                        @error('price')
                            text-red-700 dark:text-red-500
                        @else
                            text-gray-900 dark:text-white
                        @enderror">Price</label>
                        <input type="text" name="price" id="price" placeholder="999999" class="
                        @error('price')
                            bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500
                        @else
                            bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                        @enderror
                        " value="{{ old('price', $product->price) }}" required>
                        @error('price')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>                        
                        <label for="specification" class="block mb-2 text-sm font-medium 
                        @error('specification')
                            text-red-700 dark:text-red-500
                        @else
                            text-gray-900 dark:text-white
                        @enderror">Specification</label>
                        <textarea id="specification" name="specification" rows="4" class="
                        @error('specification')
                            block p-2.5 w-full text-sm text-red-900 bg-red-50 rounded-lg border border-red-300 focus:ring-red-500 focus:border-red-500 dark:bg-red-700 dark:border-red-600 dark:placeholder-red-400 dark:text-red dark:focus:ring-red-500 dark:focus:border-red-500
                        @else
                            block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                        @enderror
                        "  placeholder="Layar: ...">{{ old('specification', $product->specification) }}</textarea>
                        @error('specification')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>                        
                        <label for="description" class="block mb-2 text-sm font-medium 
                        @error('description')
                            text-red-700 dark:text-red-500
                        @else
                            text-gray-900 dark:text-white
                        @enderror">Description</label>
                        <textarea id="description" name="description" rows="4" class="
                        @error('description')
                            block p-2.5 w-full text-sm text-red-900 bg-red-50 rounded-lg border border-red-300 focus:ring-red-500 focus:border-red-500 dark:bg-red-700 dark:border-red-600 dark:placeholder-red-400 dark:text-red dark:focus:ring-red-500 dark:focus:border-red-500
                        @else
                            block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                        @enderror
                        "  placeholder="Description">{{ old('description', $product->description) }}</textarea>
                        @error('description')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="category" class="block mb-2 text-sm font-medium 
                        @error('category')
                            text-red-700 dark:text-red-500
                        @else
                            text-gray-900 dark:text-white
                        @enderror">Select category</label>
                        <select id="category" name="category" class="
                        @error('category')
                        bg-red-50 border border-red-300 text-red-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-700 dark:border-red-600 dark:placeholder-red-400 dark:text-red-500 dark:focus:ring-red-500 dark:focus:border-red-500
                        @else
                        bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                            
                        @enderror">
                            <option value="">Choose the category</option>
                            @foreach ($categories as $category)
                            
                                <option value="{{ $category->id }}"
                                    @if ($category->id === $product->category->id)
                                        selected
                                    @endif>{{ $category->name }}</option>>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-row items-center justify-center w-full">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 
                        @error('photo')
                            border-red-300 border-dashed rounded-lg cursor-pointer bg-red-50 dark:hover:bg-red-800 dark:bg-red-700 hover:bg-red-100 dark:border-red-600 dark:hover:border-red-500 dark:hover:bg-red-600
                        @else
                            border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600
                        @enderror">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 
                                @error('photo')
                                    text-red-500 dark:text-red-400
                                @else
                                    text-gray-500 dark:text-gray-400
                                @enderror" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm 
                                @error('photo')
                                    text-red-500 dark:text-red-400
                                @else
                                    text-gray-500 dark:text-gray-400
                                @enderror"><span class="font-semibold">Click to upload</span> or drag and drop your product photo</p>
                                <p class="text-xs 
                                @error('photo')
                                    text-red-500 dark:text-red-400
                                @else
                                    text-gray-500 dark:text-gray-400
                                @enderror">PNG or JPG</p>
                            </div>
                            <input id="dropzone-file" type="file" name="photo" class="hidden" />
                            @error('photo')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                        </label>
                    </div> 
                    <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save product</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
