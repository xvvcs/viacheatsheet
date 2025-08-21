<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VIA Cheatsheet</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-full flex flex-col">

<header class="relative bg-gray-900 after:pointer-events-none after:absolute after:inset-x-0 after:inset-y-0 after:border-y after:border-white/10">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-center text-white">{{$heading}}</h1>
    </div>
</header>

<main class="flex-grow">
    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-7 max-w-8xl px-5 py-6 sm:px-6 lg:px-8">
        {{$slot}}
    </div>
</main>

<figure class="max-w-screen-md mx-auto text-center py-3 mb-3">
    <svg class="w-10 h-10 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
        <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
    </svg>
    <blockquote>
        <p class="text-2xl italic font-medium text-gray-900 dark:text-gray-600">"VIA cheatsheet is just awesome. It contains tons of useful information and tells all the gatekept tricks used by OG students. Perfect choice if you just started studying at VIA."</p>
    </blockquote>
    <figcaption class="flex items-center justify-center mt-6 space-x-3 rtl:space-x-reverse">
        <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture">
        <div class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-500 dark:divide-gray-700">
            <cite class="pe-3 font-medium text-gray-900 dark:text-gray-700">Random student</cite>
            <cite class="ps-3 text-sm text-gray-500 dark:text-gray-700">CEO at Yapping & CO.</cite>
        </div>
    </figcaption>
</figure>

<footer class="bg-gray-800 shadow-sm dark:bg-gray-800">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
    <span class="text-sm text-gray-400 sm:text-center dark:text-gray-400 pr-2">© 2025 Created by <a href="https://github.com/xvvcs" class="hover:underline">Matuszewski</a> & <a href="https://github.com/imskaff" class="hover:underline">Terelak</a>. All rights reserved. This is an independent website and is not affiliated or owned by <a href="https://en.via.dk/" class="hover:underline">VIA University College</a>.</span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-400 dark:text-gray-400 sm:mt-0">
            <li><a href="#" class="hover:underline me-4 md:me-6">About</a></li>
            <li><a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a></li>
            <li><a href="#" class="hover:underline me-4 md:me-6">Licensing</a></li>
            <li><a href="#" class="hover:underline">Contact</a></li>
        </ul>
    </div>
</footer>

</body>
</html>
