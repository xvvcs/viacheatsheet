<!doctype html>
<html lang="en" class="h-full bg-gray-200 scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VIA Cheatsheet</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 sm:hidden bg-gray-700 focus:outline-none focus:ring-2  dark:text-gray-400 dark:hover:bg-gray-700">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button>

<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <x-nav-link href="/">
                    <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                        <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                    </svg>
                    <span class="ms-3">Home</span>
                </x-nav-link>
                <span class="p-1"></span>

                @foreach($sections ?? [] as $section)
                    <li>
                        <x-nav-link href="#{{ $section['id'] }}">
                            <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                                <path fill-rule="evenodd" d="M4.25 12a.75.75 0 0 1 .75-.75h14a.75.75 0 0 1 0 1.5H5a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                            </svg>
                            <span class="ms-3">{{ $section['label'] }}</span>
                        </x-nav-link>
                    </li>
                @endforeach
            </li>
        </ul>
    </div>
</aside>

<body class="min-h-full flex flex-col">

<header class="relative bg-gray-900 after:pointer-events-none after:absolute after:inset-x-0 after:inset-y-0 after:border-y after:border-white/10">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-center text-white">{{$heading}}</h1>
    </div>
</header>

<!-- Main content -->
<div class="pt-4 pb-0 pr-0 pl-0 sm:ml-64 flex-grow">
    <div class="p-12 rounded-lg">
        {{$slot}}
    </div>
        <footer class="bg-white shadow-sm dark:bg-gray-800">
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400 pr-2">© 2025 Created by <a href="https://github.com/xvvcs" class="hover:underline">Matuszewski</a> & <a href="https://github.com/imskaff" class="hover:underline">Terelak</a>. All rights reserved. This is an independent website and is not affiliated or owned by <a href="https://en.via.dk/" class="hover:underline">VIA University College</a>.</span>
                <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                    <li><a href="#" class="hover:underline me-4 md:me-6">About</a></li>
                    <li><a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a></li>
                    <li><a href="#" class="hover:underline me-4 md:me-6">Licensing</a></li>
                    <li><a href="#" class="hover:underline">Contact</a></li>
                </ul>
            </div>
        </footer>
</div>

</body>

<script>
    // Mobile sidebar toggle functionality
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.querySelector('[data-drawer-toggle="default-sidebar"]');
        const sidebar = document.querySelector('#default-sidebar');

        if (toggleButton && sidebar) {
            toggleButton.addEventListener('click', function() {
                // Toggle the sidebar visibility
                sidebar.classList.toggle('-translate-x-full');
            });

            // Close sidebar when clicking outside on mobile
            document.addEventListener('click', function(event) {
                const isClickInsideSidebar = sidebar.contains(event.target);
                const isClickOnToggle = toggleButton.contains(event.target);

                if (!isClickInsideSidebar && !isClickOnToggle && window.innerWidth < 640) {
                    sidebar.classList.add('-translate-x-full');
                }
            });

            // Handle window resize - ensure proper state
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 640) {
                    // On desktop, sidebar should be visible
                    sidebar.classList.remove('-translate-x-full');
                } else {
                    // On mobile, sidebar should be hidden by default
                    sidebar.classList.add('-translate-x-full');
                }
            });
        }
    });
</script>
</html>
