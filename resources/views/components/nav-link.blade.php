@props(['active' => false])

<a {{ $attributes }} class="{{ $active ?  "bg-dark3 text-white border-2 border-dark3 dark:bg-dark3 dark:border-dark3 shadow" : "text-dark3 border-2 border-white hover:border-dark3 dark:text-white dark:border-dark1 dark:hover:border-white dark:hover:text-white"}} rounded-md my-2 px-3 py-2 text-sm font-medium" aria-current="{{ $active ? 'page' : false}}">{{ $slot }}</a>