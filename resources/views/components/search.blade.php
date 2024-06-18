@props(['categories'])
<div class="max-w-lg mx-auto py-8">
    <form class="space-y-4" action="/product" method="GET">
        <div class="flex items-center space-x-4">
            <div class="relative flex-1">
                <input type="text" id="search" name="search" placeholder="Search products..." value="{{ request('search') }}" class="block w-full py-2.5 px-4 text-sm rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-700 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500">
                <button type="submit" class="absolute top-0 right-0 h-full px-4 text-white bg-blue-700 rounded-r-lg hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>                      
                    <span class="sr-only">Search</span>
                </button>
            </div>
            <div class="relative">
                <select id="category" name="category" class="block w-40 py-2.5 px-4 text-sm rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-700 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500">
                        <option value="" {{ (request('category') === '') ? selected : false }}
                        >All Categories</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->name }}" 
                            @if (request('category') == $category->name)
                                selected
                            @endif
                            >{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </form>
</div>