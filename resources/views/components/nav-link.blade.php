@props(['active' => false])

<a {{ $attributes }} class="{{ $active ?  "bg-dark5 text-white border border-light2 dark:bg-dark5 shadow" : "text-light2 border border-white hover:border-light2 dark:border-dark2 dark:hover:border-dark2 "}} rounded-md my-2 px-3 py-2 text-sm font-medium" aria-current="{{ $active ? 'page' : false}}">{{ $slot }}</a>