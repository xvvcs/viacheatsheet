<x-inside-layout :sections="[
    ['id' => 'accommodation', 'label' => 'Accommodation'],
    ['id' => 'furnitures', 'label' => 'Furnitures'],
    ['id' => 'moving', 'label' => 'Moving in/out']
]">
    <x-slot:heading>Accommodation</x-slot:heading>

    <!-- accommodation -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="accommodation">
        <h2 class="text-2xl font-bold mb-3 text-neutral-800 dark:text-neutral-900">Accommodation</h2>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2 pb-4">To be fair, Horsens offers a lot of opportunities and options to choose from. I really doubt you would have issues with finding your new home. If you are from Aarhus, well... I suppose you grow money trees.</p>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <div class="mb-3">
            <p class="mb-3 text-lg text-neutral-700 md:text-xl dark:text-neutral-600 font-semibold">These are the places I'll talk about:</p>

            <ol class="relative border-s border-gray-200 dark:border-gray-700">
                <li class="mb-6 ms-4">
                    <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                    <time class="mb-1 text-sm font-bold leading-none text-gray-400 dark:text-gray-500">Cheap</time>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-black">Kamtjatka Dormitory</h3>
                    <p class="font-normal text-gray-900 underline dark:text-black decoration-indigo-500">TLDR; Cheap, full of students, free gym and "gaming room", close to VIA, okay standard, slow internet.</p>
                    <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2 ">Room in shared flat - rent is 2,500 DKK to 4,500 DKK per month</p>
                    <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2 ">Studio apart. - rent is 3,300 DKK to 4,000 DKK per month</p>
                    <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2 pb-4">Two room apart. - rent is 4,000 DKK and can go up to 5,800 DKK or more per month</p>

                    <a href="https://kamtjatka.dk/" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Check it here <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg></a>
                </li>
                <li class="mb-10 ms-4">
                    <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                    <time class="mb-1 text-sm font-bold leading-none text-gray-400 dark:text-gray-500">Normal</time>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-black">Single room/shared house</h3>
                    <p class="font-normal text-gray-900 underline dark:text-black decoration-indigo-500">TLDR; Still fine financially, you WILL meet new people, even if you want or not, more space to live, need to pay for utilities but can split the costs.</p>
                    <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2 pb-4">For a decent single room - rent is around 3,500 DKK per month, plus utilities.</p>

                    <a href="social#fb" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Check facebook groups <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg></a>
                </li>
                <li class="mb-10 ms-4">
                    <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                    <time class="mb-1 text-sm font-bold leading-none text-gray-400 dark:text-gray-500">Expensive</time>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-black">Teknisk kollegium (now named Horsens Studieboliger)</h3>
                    <p class="font-normal text-gray-900 underline dark:text-black decoration-indigo-500">TLDR; Might feel expensive, really good standard, solo flat, free gym, good internet, own storage unit, gaming room, volleyball court, grill spot, far from VIA.</p>
                    <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2">1-Room Apartment (approx. 30 m²) - rent is typically in range of 2,950 - 3,150 DKK.</p>
                    <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2">2-Room Apartment (approx. 40-44m²) - rent is typically in range of 3,620 - 4,250 DKK.</p>
                    <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2 pb-4">3-Room Apartment (approx. 55 m²) - rent is typically in range of 5,050 - 5,250 DKK.</p>

                    <a href="https://horsensstudieboliger.dk/" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Check it here <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg></a>
                </li>
                <li class="ms-4">
                    <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                    <time class="mb-1 text-sm font-bold leading-none text-gray-400 dark:text-gray-500">The most expensive</time>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-black">Solo house/apartment</h3>
                    <p class="font-normal text-gray-900 underline dark:text-black decoration-indigo-500"">TLDR; Expensive if solo, your OWN place, in 90% cases really well equipped and new, can live wherever, basically each place comes with its own benefits.</p>
                    <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2">'Low' end (100-140m²) - rent + utilities is approx. 6,000 DKK - 11,000 DKK per month</p>
                    <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2">'Mid' range (130-180m²) - rent + utilities is approx. 11,000 DKK - 15,000 DKK per month</p>
                    <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2 pb-4">'Higher' end (160-200+²) - rent + utilities is approx.  15,000 DKK+</p>

                    <a href="https://www.boligportal.dk/lejligheder/horsens/" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Check Boligportal here <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg></a>
                </li>
            </ol>


        </div>

        <div class="flex items-center p-4 mb-2 text-sm text-red-800 border border-red-300 rounded-lg bg-red-100" role="alert">
            <svg class="flex-shrink-0 inline w-5 h-5 mr-3 text-red-700" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l6.518 11.59c.75 1.336-.213 3.011-1.742 3.011H3.481c-1.53 0-2.492-1.675-1.742-3.011l6.518-11.59zM11 14a1 1 0 10-2 0 1 1 0 002 0zm-1-2a1 1 0 01-1-1V8a1 1 0 112 0v3a1 1 0 01-1 1z" clip-rule="evenodd"></path>
            </svg>
            <span class="font-medium">Please be aware of common scams and 'phantom' flats in Denmark. There is a well-known scam on foreign students, where they pay deposit and rent in advance, to later arrive in Denmark to inexistent apartment. <br> You can read more about them <a href="https://bdtu.dk/footer-info-links/housing-scams/" class="underline font-bold">here.</a></span>
        </div>
    </div>

    <!-- furnitures -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="furnitures">
        <h2 class="text-2xl font-bold mb-3 text-neutral-800 dark:text-neutral-900">Furnitures</h2>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2 pb-4">
            As of furnitures, you get two options: <i>cheap</i> and <i>pretty expensive</i> way.
        </p>
    </div>

    <!-- cheap -->
    <h2 class="text-2xl font-bold dark:text-neutral-900">Cheap</h2>

    <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2 pb-4">
        Horsens has a lot of second-hand shops, where you can buy used (but often as new) furnitures for a very low price. You can find everything from beds, tables, chairs to kitchenware.
    <br>
        <strong>Real saviors in that matter are:</strong>
    </p>
        <!-- bla kors -->
        <div class="flex flex-col md:flex-row gap-6 items-start">
            <div class="md:w-1/3 w-full pt-12">
                <h3 class="text-xl font-semibold mb-2">Blå Kors</h3>
                <p class="mb-1"><strong>Address:</strong> Vejlevej 10, 8700 Horsens</p>
                <p class="mb-1"><strong>Opening Hours:</strong> Mon-Sat: 10:00-17:00, Sun: closed</p>
                <p class="mb-1"><strong>Phone:</strong>+45 75 78 18 18</p>
            </div>
            <!-- photo placeholder -->
            <div class="md:w-1/3 w-full flex justify-center items-center pt-12">
                <div class="w-full h-40 bg-gray-200 rounded-lg flex items-center justify-center">
                    <img src="https://gdkfiles.visitdenmark.com/files/472/133835_Parkeringsplads-foran-Blaa-Kors-Genbrugscenter.jpg?width=987" alt="Photo of Blå Kors" class="w-full h-64 object-cover rounded-lg"/>
                </div>
            </div>
            <!-- Google Maps -->
            <div class="md:w-1/3 w-full" loading="lazy">
                <iframe
                    src="https://www.google.com/maps?q=Blue+Cross+Op+Shop+Vejlevej+10,+8700+Horsens&output=embed"
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
        <!-- rode kors -->
        <div class="flex flex-col md:flex-row gap-6 items-start">
            <div class="md:w-1/3 w-full pt-12">
                <h3 class="text-xl font-semibold mb-2">Røde Kors</h3>
                <p class="mb-1"><strong>Address:</strong> Vejlevej 1, 8700 Horsens</p>
                <p class="mb-1"><strong>Opening Hours:</strong> Mon-Fri: 10:00-17:00, Sat: 10:00-14:00, Sun: closed</p>
                <p class="mb-1"><strong>Phone:</strong>+45 61 18 52 62</p>
            </div>
            <!-- photo placeholder -->
            <div class="md:w-1/3 w-full flex justify-center items-center pt-12">
                <div class="w-full h-40 bg-gray-200 rounded-lg flex items-center justify-center">
                    <img src="https://lh3.googleusercontent.com/gps-cs-s/AC9h4nrfJ0geU8fMtTkPKVc0J1q3LyFVLCxSHvPiQZN07sUHwelcATEBjV0k61P0OHZhlIDiXl7f6i3YZf23XnxkQXQcHncig8_F8vhGyMd7iNr8T5OG-NnSXtbCkDNVgOovzkkYhMis=s680-w680-h510-rw" alt="Photo of Røde Kors" class="w-full h-64 object-cover rounded-lg"/>
                </div>
            </div>
            <!-- Google Maps -->
            <div class="md:w-1/3 w-full" loading="lazy">
                <iframe
                    src="https://www.google.com/maps?q=Rode+Kors+Vejlevej+1,+8700+Horsens&output=embed"
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
            <div class="flex items-center p-4 mb-8 text-sm text-blue-500 border border-blue-300 rounded-lg bg-blue-100" role="alert">
        <svg class="flex-shrink-0 inline w-5 h-5 mr-3 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l6.518 11.59c.75 1.336-.213 3.011-1.742 3.011H3.481c-1.53 0-2.492-1.675-1.742-3.011l6.518-11.59zM11 14a1 1 0 10-2 0 1 1 0 002 0zm-1-2a1 1 0 01-1-1V8a1 1 0 112 0v3a1 1 0 01-1 1z" clip-rule="evenodd"></path>
        </svg>
                <span class="font-medium text-base">Except for these places, <b>we highly recommend you check out the local Facebook groups</b>, <span class="font-semibold text-gray-900 underline dark:text-black decoration-indigo-500">and the G.O.A.T - Facebook marketplace,</span> for great deals on second-hand furniture, often for half or even less than the price of new items.
        <br>
        Think of it as an eBay, but for Denmark. Check out our <a href="/social#fb" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">section about Facebook groups</a> for more information.</span>
    </div>


    <!-- expensive -->
    <h2 class="text-2xl font-bold dark:text-neutral-900">Expensive</h2>

    <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2 pb-4">
        Regarding new furnitures, there is a lot of local furniture stores and larger chains like IKEA for a wider selection.
    </p>
        <!-- jysk -->
        <div class="flex flex-col md:flex-row gap-6 items-start">
            <div class="md:w-1/3 w-full pt-12">
                <h3 class="text-xl font-semibold mb-2">JYSK</h3>
                <p class="mb-1"><strong>Address:</strong> Ove Jensen Allé 11F Løvbjergcenteret, 8700 Horsens</p>
                <p class="mb-1"><strong>Opening Hours:</strong> Mon-Fri: 10:00-19:00, Sat-Sun: 10:00-17:00</p>
                <p class="mb-1"><strong>Phone:</strong>+45 70 80 81 90</p>
                <p class="mb-1"><strong>Site:</strong> <a href="https://jysk.dk/" class="text-blue-500 underline">https://jysk.dk/</a></p>
            </div>
            <!-- photo placeholder -->
            <div class="md:w-1/3 w-full flex justify-center items-center pt-12">
                <div class="w-full h-40 bg-gray-200 rounded-lg flex items-center justify-center">
                    <img src="https://lh3.googleusercontent.com/p/AF1QipP_Sp4eFTf3wqpkxAMlyz5gZUIb9NuReDKVvtCw=s680-w680-h510-rw" alt="Photo of JYSK" class="w-full h-64 object-cover rounded-lg"/>
                </div>
            </div>
            <!-- Google Maps -->
            <div class="md:w-1/3 w-full" loading="lazy">
                <iframe
                    src="https://www.google.com/maps?q=Jysk,8700+Horsens&output=embed"
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
            <!-- danbo furniture -->
        <div class="flex flex-col md:flex-row gap-6 items-start">
            <div class="md:w-1/3 w-full pt-12">
                <h3 class="text-xl font-semibold mb-2">Danbo Møbler</h3>
                <p class="mb-1"><strong>Address:</strong> Vårsøvej 4, 8700 Horsens</p>
                <p class="mb-1"><strong>Opening Hours:</strong> Mon-Fri: 10:00-17:30, Sat-Sun: 10:00-15:00</p>
                <p class="mb-1"><strong>Phone:</strong>+45 75 62 68 00</p>
                <p class="mb-1"><strong>Site:</strong> <a href="https://danbohorsens.dk/" class="text-blue-500 underline">https://www.danbohorsens.dk/</a></p>
            </div>
            <!-- photo placeholder -->
            <div class="md:w-1/3 w-full flex justify-center items-center pt-12">
                <div class="w-full h-40 bg-gray-200 rounded-lg flex items-center justify-center">
                    <img src="https://lh3.googleusercontent.com/p/AF1QipNeJBwAfDuM2f5kAta_2_O9jz-anQoeN1mKMGQk=s680-w680-h510-rw" alt="Photo of Danbo Møbler" class="w-full h-64 object-cover rounded-lg"/>
                </div>
            </div>
            <!-- Google Maps -->
            <div class="md:w-1/3 w-full" loading="lazy">
                <iframe
                    src="https://www.google.com/maps?q=Danbo+Møbler,8700+Horsens&output=embed"
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
        <!-- Ilva -->
        <div class="flex flex-col md:flex-row gap-6 items-start">
            <div class="md:w-1/3 w-full pt-12">
                <h3 class="text-xl font-semibold mb-2">Ilva</h3>
                <p class="mb-1"><strong>Address:</strong> Ove Jensens Allé 19A, 8700 Horsens</p>
                <p class="mb-1"><strong>Opening Hours:</strong> Mon-Fri: 10:00-18:00, Sat-Sun: 10:00-17:00</p>
                <p class="mb-1"><strong>Phone:</strong>+45 88 17 99 10</p>
                <p class="mb-1"><strong>Site:</strong> <a href="https://www.ilva.dk/" class="text-blue-500 underline">https://www.ilva.dk/</a></p>
            </div>
            <!-- photo placeholder -->
            <div class="md:w-1/3 w-full flex justify-center items-center pt-12">
                <div class="w-full h-40 bg-gray-200 rounded-lg flex items-center justify-center">
                    <img src="https://lh3.googleusercontent.com/gps-cs-s/AC9h4npUne8JefeFxgYW6PZxNNONqerhlT2ebG3hHUmxOsw_KUcWtm9j46mDjnyIycrP0YB75iTSXhc_n9XwxDyAOIO500f2LAxT0euwWPa9oqVcJzv2VsAuKDHsZ1V6ubI2HXNBy4sxVQ=s680-w680-h510-rw" alt="Photo of Ilva" class="w-full h-64 object-cover rounded-lg"/>
                </div>
            </div>
            <!-- Google Maps -->
            <div class="md:w-1/3 w-full" loading="lazy">
                <iframe
                    src="https://www.google.com/maps?q=Ilva,8700+Horsens&output=embed"
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
        <!-- IKEA Aarhus -->
        <div class="flex flex-col md:flex-row gap-6 items-start">
            <div class="md:w-1/3 w-full pt-12">
                <h3 class="text-xl font-semibold mb-2">IKEA (<span class="font-semibold text-gray-900 underline dark:text-black decoration-red-500">Aarhus</span>)</h3>
                <p class="mb-1"><strong>Address:</strong> Graham Bells Vej 7, 8200 Aarhus</p>
                <p class="mb-1"><strong>Opening Hours:</strong> Mon-Sun: 10:00-20:00</p>
                <p class="mb-1"><strong>Phone:</strong>+45 70 15 09 09</p>
                <p class="mb-1"><strong>Site:</strong> <a href="https://www.ikea.com/dk/da/" class="text-blue-500 underline">https://www.ikea.com/dk/da/</a></p>
            </div>
            <!-- photo placeholder -->
            <div class="md:w-1/3 w-full flex justify-center items-center pt-12">
                <div class="w-full h-40 bg-gray-200 rounded-lg flex items-center justify-center">
                    <img src="https://lh3.googleusercontent.com/p/AF1QipMUfGWQVfg6aLlkjciz4b097VgFIkgcxhC4JZ-B=s680-w680-h510-rw" alt="Photo of IKEA Aarhus" class="w-full h-64 object-cover rounded-lg"/>
                </div>
            </div>
            <!-- Google Maps -->
            <div class="md:w-1/3 w-full" loading="lazy">
                <iframe
                    src="https://www.google.com/maps?q=Ikea+Aarhus,8200+Aarhus&output=embed"
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

    <!-- moving in out -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="moving">
        <h2 class="text-2xl font-bold mb-3 text-neutral-800 dark:text-neutral-900">Moving in/out</h2>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2 pb-4">
            If you're moving in or out of a place, here's our guide to help you with the process.
        </p>
    </div>

    <!-- when moving in -->
    <h2 class="text-2xl font-bold dark:text-neutral-900 pb-4">When moving in...</h2>
        <!-- trailers -->
    <h3 class="text-xl font-bold dark:text-neutral-900">Trailers</h3>
    <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2 pb-4">
        If you need to move furniture or big stuff around Horsens, we recommend renting a trailer. The most popular way is using the <b>Freetrailer</b> app.
    <br>
        Here’s how it works:
    </p>
    <ul class="pl-6 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 list-decimal text-base">
        <li>Download the Freetrailer app (available on both Google Play and App Store)</li>
        <li>Find and reserve a trailer.</li>
        <li>Pick up the trailer at the time you have reserved it.</li>
        <li>Use it for the entire rental period and return it on time.</li>
    </ul>
    <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2 pb-4">
        Visit <a href="https://www.freetrailer.com/en/" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">Freetrailer.com</a> for more information.
    </p>

    <!-- trailers -->
    <h3 class="text-xl font-bold dark:text-neutral-900">Deposit</h3>
    <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2 pb-4">
        When renting out an apartment, you will be required to pay a deposit. This is usually equivalent to 1-3 months of rent.
        <br>
        The deposit is returned to you when you move out, provided there are no damages or outstanding payments. However, our experience has shown that most of the time, you will lose approx. 40% of the deposit due to cleaning, repairs, or other issues in the apartment.
    </p>

    <!-- when moving out -->
    <h2 class="text-2xl font-bold dark:text-neutral-900 pb-4">When moving out...</h2>

    <h3 class="text-xl font-bold dark:text-neutral-900">Cleaning</h3>
    <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2 pb-4">
        Before you move out, it's important to clean the apartment thoroughly. This includes:
    </p>
    <ul class="pl-6 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 list-decimal text-base">
        <li>Cleaning all surfaces, including floors, walls, and windows.</li>
        <li>Removing all personal belongings, including all your furniture, etc.</li>
        <ul class="pl-6 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 list-disc text-base">
            <li>Make sure you sell/get rid of any items you no longer need.</li>
        </ul>
        <li>Disposing of any trash or unwanted items.</li>
        <li>Ensuring that all appliances are clean and in working order.</li>
</x-inside-layout>
