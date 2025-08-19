<x-inside-layout :sections="[

    ['id' => 'rejseplanen', 'label' => 'Rejseplanen'],
    ['id' => 'buses', 'label' => 'Buses'],
    ['id' => 'trains', 'label' => 'Trains'],
    ['id' => 'airport', 'label' => 'Airport'],
    ['id' => 'commute-card', 'label' => 'Commute Card'],
    ['id' => 'cars', 'label' => 'Cars']
]">
    <x-slot:heading>Commuting</x-slot:heading>
    <!-- disclaimer -->
    <div class="flex items-center p-4 mb-8 text-sm text-blue-500 border border-blue-300 rounded-lg bg-blue-100" role="alert">
        <svg class="flex-shrink-0 inline w-5 h-5 mr-3 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l6.518 11.59c.75 1.336-.213 3.011-1.742 3.011H3.481c-1.53 0-2.492-1.675-1.742-3.011l6.518-11.59zM11 14a1 1 0 10-2 0 1 1 0 002 0zm-1-2a1 1 0 01-1-1V8a1 1 0 112 0v3a1 1 0 01-1 1z" clip-rule="evenodd"></path>
        </svg>
        <span class="font-medium">We recommend you getting all the apps below, as they are <b>essential</b> for your daily commute (available for both Android and iOS).</span>
    </div>

    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="rejseplanen">
        <span class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center mr-3">
            <img src="https://play-lh.googleusercontent.com/N4haxtCO03P5VhHPGAgmxlbDKemN3a1Be-CUhfwa4du7Tgm51PRy_WWPKaqNjriGFpo=w240-h480-rw" alt="Rejseplanen App Icon">
        </span>
        <h2 class="text-2xl font-bold mb-3 text-neutral-800 dark:text-neutral-900">Rejseplannen</h2>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed">
            <b>Rejseplanen is the most essential app for public transport in Denmark.</b> It helps you easily plan your journey from A to B by showing all available bus, train, and metro connections. You can see departure times, routes, and platform information, and get real-time updates on delays or changes. The app is available in English and is highly recommended for anyone traveling around Denmark.
        </p>
    </div>

    <!-- Buses -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="buses">
        <h2 class="text-2xl font-bold mb-3 text-neutral-800 dark:text-neutral-900">Buses</h2>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed">
            Horsens has a well-developed bus infrastructure, making it easy to get around the city and to nearby areas. Local and regional buses are operated by Midttrafik, with frequent routes connecting key locations such as VIA University College, the train station, and the city center. Buses are modern, reliable, and equipped for accessibility.
        </p>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2 pb-4">
            For planning your journey and buying tickets, several apps are available:
    <!-- rejsekort -->
    <div class="flex items-center mb-4">
        <span class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center mr-3">
            <img src="https://play-lh.googleusercontent.com/mI5HeAx4tj4ZF6m-H9RqaPmmpItfWTA5Amf1NKlvH4CYr_0D-d5zvLD0eHDVuKs3fw=w240-h480-rw" alt="Rejsekort App Icon">
        </span>
        <span class="text-2xl font-bold text-gray-700 dark:text-neutral-800">rejsekort</span>
    </div>
        <p class="font-bold pl-6 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 text-base">
            Rejsekort is a smart card used for travel on public transport in Denmark. It's an essential tool when traveling by bus and here's how you use it:</p>
            <ul class="pl-6 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 list-decimal text-base">
                <li>Make an account and add a payment method (credit card or MobilePay).</li>
                <li>Whenever getting on the bus, simply swipe "Check in" on your phone and show the QR code to the driver.</li>
                <li>When you reach your destination, remember to end your journey so you don't get charged for the entire route.</li>
            </ul>
        <span class="font-bold pl-2 space-y-4 text-left text-gray-500 dark:text-gray-800 text-base">We can easily say its the cheapest option to commute and move around.</span> <span class="font-bold text-gray-900 underline dark:text-black decoration-red-500">The ticket costs only 14DKK.</span>
    <!-- Midtraffik live -->
    <div class="flex items-center mb-4 mt-4">
        <span class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center mr-3">
            <img src="https://play-lh.googleusercontent.com/DSAfxTnjDWR6smLu1D_-NhH-ea8Qkj1x1Dm-drF8wxREcpu83IGpbn-V9nNDcnYXiNc" alt="Midtraffik Live App Icon">
        </span>
        <span class="text-2xl font-bold text-gray-700 dark:text-neutral-800">Midtraffik live</span>
    </div>
        <p class="font-bold pl-6 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 text-base">
            Midtraffik live is the official app for Midttrafik. It offers features like live tracking of buses, notifications about delays, and the ability to purchase tickets directly from your phone.
        </p>
    </div>

    <!-- Trains -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="trains">
        <h2 class="text-2xl font-bold mb-3 text-neutral-800 dark:text-neutral-900">Trains</h2>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed">
            Horsens is well-connected by train, making it convenient to travel both within the city and to other parts of Denmark. The main train station offers frequent regional and intercity services operated by DSB, Denmark’s national railway company. Trains are modern, comfortable, and provide easy access to destinations like Aarhus, Copenhagen, and beyond.
        </p>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2 pb-4">
            For real-time schedules, ticket purchases, and travel updates, the DSB app is highly recommended.
        </p>

        <!-- DSB app -->
        <div class="flex items-center mb-4">
            <span class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center mr-3">
                <img src="https://play-lh.googleusercontent.com/_vSX1sOpWW_EmCmKWGZYpiK852TCWW05Kc3U16cpgDvC2OqSYUhgPvsLoGt_q_6GEemp=w240-h480-rw" alt="DSB App Icon">
            </span>
            <span class="text-2xl font-bold text-gray-700 dark:text-neutral-800">DSB</span>
        </div>
            <p class="font-bold pl-2 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 text-base">
                DSB is the official app for Denmark's national railway company. It provides real-time information on train schedules, platform changes, and ticket purchases. Here's how you use it:</p>
                <ul class="pl-6 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 list-decimal text-base">
                    <li>Make an account on the DSB App.</li>
                    <li>Search for your desired train route and view real-time schedules.</li>
                    <ul class="pl-6 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 list-disc text-base">
                        <li>If you are in the age of 16-25, make sure you choose "Young 16-25 years" for discounted fares.</li>
                    </ul>
                    <li>Purchase tickets directly through the app for a seamless travel experience.</li>
                    <li>On the "Your trips" section, you can view your tickets and past travel history.</li>
                </ul>

        <span class="font-bold pl-2 space-y-4 text-left text-gray-500 dark:text-gray-800 text-base"> DSB Tip:</span> Always try to buy tickets in advance, as it can save you money. If you buy a ticket on the train, it will cost you more than if you buy it in advance through the app or at the station. The price difference can be significant, so it's worth planning ahead to get the best deal. <br>
        <span class="font-bold pl-2 space-y-4 text-left text-gray-500 dark:text-gray-800 text-base"> The ticket costs around 50-200DKK depending on the distance.</span> <span class="font-bold text-gray-900 underline dark:text-black decoration-red-500">The ticket to Copenhagen H and Copenhagen airport solds out and can get pricey fast. Don't think, buy. </span>
    </div>
    <!-- airports -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="airport">
        <h2 class="text-2xl font-bold mb-3 text-neutral-800 dark:text-neutral-900">Airports</h2>
        <p class="font-bold pl-2 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 text-base"> There are 3 main airports close to us:</p>
        <ul class="pl-6 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 list-decimal text-base">
            <li><b>Aarhus Airport (AAR)</b> - Located about 40 km from Horsens, it offers both domestic and international flights.</li>
            <li><b>Billund Airport (BLL)</b> - Approximately 50 km away, it's the second-largest airport in Denmark and serves many international destinations.</li>
            <li><b>Copenhagen Airport (CPH)</b> - The largest airport in Denmark, located about 200 km from Horsens, it connects to numerous global destinations.</li>
        </ul>

        <p class="font-bold pl-2 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 text-base"> Your main one, most likely, will be the CPH airport</p>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed">To get to the airport, you can use the DSB train service from Horsens to Copenhagen Central Station (København H), and then transfer to the Metro or another train that goes directly to the airport. The journey takes about 2.5 to 3 hours, depending on connections.</p>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed"> In case of wanting to use Billund Airport, you can take a train from Horsens to Vejle, and then Bus to Billund which takes about 1 hour. The bus service is operated by Midttrafik and offers a convenient way to reach the airport.</p>
    </div>
    <!-- commute cards -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="commute-card">
        <h2 class="text-2xl font-bold mb-3 text-neutral-800 dark:text-neutral-900">Commute Card</h2>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed">
            If you plan to commute frequently, consider getting a <b>commute card</b>. It offers unlimited travel within a specific zone for a monthly fee, making it a cost-effective option for regular commuters. You can purchase it through the Rejseplanen app or at ticket counters.
        </p>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2 pb-4">
            The commute card is especially useful for students and professionals who travel daily, as it provides flexibility and convenience.
        </p>

        <p class="font-bold pl-2 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 text-base"> As for interns...
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2 pb-4"> you can get a <b>student commute card</b> which is cheaper than the regular one. It costs <b>around 500DKK per month </b> allows unlimited travel within your selected zones. You can let your employer know, and they will help you with the process of getting it. Then, the government will cover the expenses.</p>
    </div>
        <!-- cars -->
        <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="cars">
        <h2 class="text-2xl font-bold mb-3 text-neutral-800 dark:text-neutral-900">Cars</h2>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed"></p>
    </div>
</x-inside-layout>
