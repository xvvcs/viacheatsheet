@props(['active'=> false])

<a class="{{ $active ? 'bg-gray-950/50 text-white rounded-md' : 'text-gray-300 hover:bg-white/5 hover:text-white rounded-md'}} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
" aria-current="{{ $active ? 'page': 'false'}}" {{$attributes}}> {{$slot}} </a>

