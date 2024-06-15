<x-root>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar/>
    
    <main class="bg-white shadow dark:bg-gray-900">
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>
    
    <x-footer/>
</x-root>