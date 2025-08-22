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
    </div>

    <h2 class="text-2xl font-bold text-neutral-900">Football</h2>
    <br>
    <p class="text-neutral-700 leading-relaxed">
        Football is a major sport in Horsens, with a strong local following. The city's team, AC Horsens, plays currently in the Betina Liga (1.Division) and has a dedicated fan base. The club's home matches at the CASA Arena are popular events, drawing supporters from across the region, which hosts not only football matches but also concerts and other events.
    </p>
    <p class="text-neutral-700 leading-relaxed">
        Due to Horsens' strong football culture, the city has multiple football pitches available for both amateur and professional use.
    </p>

    <!-- cos tutaj dalej nw -->


    <h2 class="text-2xl font-bold text-neutral-900">Basketball</h2>
    <br>

    <!-- cos tutaj dalej nw -->

    <h2 class="text-2xl font-bold text-neutral-900">Handball</h2>
    <br>

    <!-- cos tutaj dalej nw -->

    <h2 class="text-2xl font-bold text-neutral-900">Tennis</h2>
    <br>

    <!-- cos tutaj dalej nw -->

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
</x-inside-layout>

