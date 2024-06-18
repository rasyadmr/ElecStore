@props(['category'])
<a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 flex flex-col justify-center mx-auto">
    <img src="{{ asset('assets/images/categories/'.$category->image) }}" alt="" class="min-h-52 min-w-52 rounded-t-lg m-auto">
    <h5 class="text-center my-auto pt-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $category->name }}</h5>
</a>