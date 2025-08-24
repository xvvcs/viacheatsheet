<x-inside-layout :sections="[
    ['id' => 'sports', 'label' => 'Sports'],
    ['id' => 'fitness', 'label' => 'Fitness & Gym']
]">
    <x-slot:heading>Sports</x-slot:heading>

        <!-- Sports -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="siri">
        <h2 class="text-2xl font-bold mb-3 text-neutral-900">Sports</h2>
        <p class="text-neutral-700 leading-relaxed">
            Horsens is known for its vibrant sports scene, featuring clubs like AC Horsens, which competes in Danish football leagues. The city also supports handball, basketball, and cycling, with facilities and local teams for enthusiasts. Famous clubs such as Horsens IC (basketball) and Horsens Håndboldklub (handball) contribute to the city's active lifestyle and community spirit.
        </p>

    <h2 class="text-2xl font-bold text-neutral-900 pt-4">Football</h2>
    <br>
    <p class="text-neutral-700 leading-relaxed">
        Football is a major sport in Horsens, with a strong local following. The city's team, AC Horsens, plays currently in the Betina Liga (1.Division) and has a dedicated fan base. The club's home matches at the CASA Arena are popular events, drawing supporters from across the region, which hosts not only football matches but also concerts and other events.
    </p>
    <p class="text-neutral-700 leading-relaxed">
        Due to Horsens' strong football culture, the city has multiple football pitches available for both amateur and professional use.
    </p>

    <!-- cos tutaj dalej nw -->


    <h2 class="text-2xl font-bold text-neutral-900 pt-4">Basketball</h2>
    <br>

    <p class="text-neutral-700 leading-relaxed pb-4">
        Basketball is another popular sport in Horsens, with Horsens IC being one of the top teams in Denmark. The team has won several national championships and is known for its competitive spirit and strong community support. Home games are held at Forum Horsens, which provides an exciting atmosphere for fans.
    </p>



</div>

    <div id="default-carousel" class="relative w-full pb-4" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="https://khr.dk/wp-content/uploads/2021/09/forum-horsens-arena-interior1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Forum Horsens Arena Interior">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://i0.wp.com/horsensleksikon.dk/wp-content/uploads/Casa-Arena.JPG?ssl=1" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Casa Arena">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://gdkfiles.visitdenmark.com/files/472/245091_aqua-forum-vandrutsjebane.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Aqua Forum">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://bestofhorsens.dk/f/blog/article/0e814c192304b324bfa6de0321705c55fb77a784_thumb.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Best of Horsens">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://i.ytimg.com/vi/ZqGElOQ8ngQ/hq720.jpg?sqp=-oaymwExCK4FEIIDSFryq4qpAyMIARUAAIhCGAHwAQH4Af4JgALQBYoCDAgAEAEYfyBZKCEwDw==&rs=AOn4CLDPghNPn01S9GEyeBFDq0tlPbht6A" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Forum Horsens Basketball">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white/80" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white/80" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white/80" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white/80" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white/80" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
        </button>
    </div>





    <!-- fitness gym -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="fitness">
        <h2 class="text-2xl font-bold mb-3 text-neutral-900">Fitness & Gym</h2>
        <p class="text-neutral-700 leading-relaxed">
            Horsens offers a variety of fitness centers and gyms catering to different preferences and budgets.
            <br>
            Popular options include:
        </p>

        <!-- puregym -->
            <div class="flex flex-col md:flex-row gap-6 items-start">
                <div class="md:w-1/3 w-full pt-12">
                    <h3 class="text-xl font-semibold mb-2">PureGym</h3>
                    <p class="mb-1"><strong>Address:</strong> Ove Jensens Allé 19 D, 8700 Horsens</p>
                    <p class="mb-1"><strong>Opening Hours:</strong> Mon-Sun: 05:00-00:00</p>
                    <p class="mb-1"><strong>Memberships:</strong> <a href="https://www.puregym.dk/bliv-medlem/95/medlemskab" class="font-medium text-blue-700 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-800 hover:no-underline"><i>Click here</i></a></p>
                </div>
                <!-- photo placeholder -->
                <div class="md:w-1/3 w-full flex justify-center items-center pt-12">
                    <div class="w-full h-40 bg-gray-200 rounded-lg flex items-center justify-center">
                        <img src="https://mit.puregym.dk/images/centers/758/a-indgang-190-ove-jensens-alle-puregym.webp" alt="Photo of Fitness World Horsens" class="w-full h-64 object-cover rounded-lg"/>
                    </div>
                </div>
                <!-- Google Maps -->
                <div class="md:w-1/3 w-full" loading="lazy">
                    <iframe
                        src="https://www.google.com/maps?q=Pure+Gym,+8700+Horsens&output=embed"
                        width="100%"
                        height="250"
                        style="border:0; border-radius: 12px;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>
            </div>
            <span class="p-4"></span>
        <!-- fitness x -->
            <div class="flex flex-col md:flex-row gap-6 items-start">
                <div class="md:w-1/3 w-full pt-12">
                    <h3 class="text-xl font-semibold mb-2">Fitness X</h3>
                    <p class="mb-1"><strong>Address:</strong> Emil Møllers Gade 30, 8700 Horsens
                    <br>
                    <i>and</i>
                    <br>
                    Høegh Guldbergs Gade 1, 8700 Horsens</p>
                    <p class="mb-1"><strong>Opening Hours:</strong> Mon-Fri: 05:00-22:00, Sat-Sun: 07:00-22:00</p>
                    <p class="mb-1"><strong>Memberships:</strong> <a href="https://fitnessx.dk/tilmelding/" class="font-medium text-blue-700 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-800 hover:no-underline"><i>Click here</i></a></p>
                </div>
                <!-- photo placeholder -->
                <div class="md:w-1/3 w-full flex justify-center items-center pt-12">
                    <div class="w-full h-40 bg-gray-200 rounded-lg flex items-center justify-center">
                        <img src="https://images.jfmedier.dk/images/e/ed/ed5/ed5ac5e5-e171-4f25-886a-1755d44a9e02_75_90_0_0_4032_2268_1440_810_002429e1.jpg" alt="Photo of Fitness World Horsens" class="w-full h-64 object-cover rounded-lg"/>
                    </div>
                </div>
                <!-- Google Maps -->
                <div class="md:w-1/3 w-full" loading="lazy">
                    <iframe
                        src="https://www.google.com/maps?q=Fitness+X+Emil+Møllers+Gade+30,+8700+Horsens&output=embed"
                        width="100%"
                        height="250"
                        style="border:0; border-radius: 12px;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>
            </div>
            <span class="p-2"></span>
            <div class="flex flex-col md:flex-row gap-6 items-start">
                <div class="md:w-1/3 w-full pt-12">
                    <span class="p-4"></span>
                </div>
                <!-- photo placeholder -->
                <div class="md:w-1/3 w-full flex justify-center items-center pt-12">
                    <div class="w-full h-40 bg-gray-200 rounded-lg flex items-center justify-center">
                        <img src="https://fitnessx.dk/wp-content/uploads/IMG_4490-scaled.jpg" alt="Photo of Fitness World Horsens" class="w-full h-64 object-cover rounded-lg"/>
                    </div>
                </div>
                <!-- Google Maps -->
                <div class="md:w-1/3 w-full" loading="lazy">
                    <iframe
                        src="https://www.google.com/maps?q=Fitness+X+Høegh+Guldbergs&output=embed"
                        width="100%"
                        height="250"
                        style="border:0; border-radius: 12px;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>
            </div>
    </div>
</x-inside-layout>
