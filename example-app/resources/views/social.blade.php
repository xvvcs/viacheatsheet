<x-inside-layout :sections="[
    ['id' => 'goin', 'label' => 'Goin\''],
    ['id' => 'fb', 'label' => 'Facebook groups'],
    ['id' => 'night', 'label' => 'Nightlife'],
    ['id' => 'clubs', 'label' => 'Clubs']
]">
    <x-slot:heading>Social</x-slot:heading>

    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="goin">
        <span class="w-10 h-10 flex items-center justify-center mr-3 pb-2">
            <img src="https://play-lh.googleusercontent.com/uvQro_BcBsK-mdmUbKKE0IP_XOyDIBieMJOhkgOSwNXdrESlzgOsbNyqioX2r2fNtEE" alt="Goin' App Icon">
        </span>
        <h2 class="text-2xl font-bold mb-3 text-neutral-900 dark:text-neutral-900">Goin'</h2>
        <p class="text-neutral-700 dark:text-neutral-700 leading-relaxed">Goin' is a social networking app designed to help students connect, discover events, and join groups based on shared interests. It's an app designed to help new students, especially internationals, connect with each other.</p>
        <p class="text-neutral-700 dark:text-neutral-700 leading-relaxed">Once you get accepted to VIA University College, you should receive an invitation on your university email to join the Goin' app community.</p>
    </div>

    <h2 class="text-2xl font-bold dark:text-neutral-900">Step by step process:</h2>
    <br>
    <ul class="pl-6 space-y-4 text-left text-neutral-700 dark:text-neutral-700 mb-4 list-decimal text-base">
        <li>
            Download the Goin' app from Google Play or App Store.</a>
        </li>
        <li>
            When registering, make sure to use your <u>university email address</u> (e.g. 123456@via.dk).
        </li>
        <li>
            Create your profile and fill in the information about yourself.
        </li>
        <li>
            Search for groups that interest you or look for new connections.
        </li>
    </ul>

    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="fb">
        <span class="w-10 h-10 flex items-center justify-center mr-3 pb-2">
            <img src="https://play-lh.googleusercontent.com/KCMTYuiTrKom4Vyf0G4foetVOwhKWzNbHWumV73IXexAIy5TTgZipL52WTt8ICL-oIo=w240-h480-rw" alt="Facebook App Icon">
        </span>
        <h2 class="text-2xl font-bold mb-3 text-neutral-800 dark:text-neutral-900">Facebook groups</h2>
        <p class="text-neutral-700 dark:text-neutral-700 leading-relaxed">Once you're settled in, you'll find that a lot happens on Facebook. It's where you'll get the inside scoop on events, find a cheap couch, look for an apartment or connect with the wider student community. Many Danes use Facebook and that's why you should too.</p>
    </div>

    <h2 class="text-2xl font-bold text-neutral-900 dark:text-neutral-900">Here are some Facebook groups we think you should consider joining:</h2>
    <br>
    <ul class="pl-6 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 list-disc text-base">
        <li>
            <a href="https://www.facebook.com/groups/Horsen.Int" class="font-medium text-blue-700 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-800 hover:no-underline"><i>HORSENS INTERNATIONAL COMMUNITY</i></a> and <a href="https://www.facebook.com/groups/206473553264744" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-500 hover:text-blue-700 hover:no-underline"><i>Horsens International</i></a>
            <p class="pl-6 space-y-4 text-left text-neutral-700 dark:text-neutral-700 mb-4 text-base pt-2">
                On these groups, you can see posts about selling and buying items, moving out sales or free items to pick up, renting apartments, offering or searching for services such as baking, hairstyling, photoshooting, and job listings. If you are just getting started in Denmark, these groups can be a valuable resource for finding what you need.
            </p>
        </li>
        <li>
            <a href="https://www.facebook.com/groups/viacampushorsensinternational" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline"><i>VIA Campus Horsens International</i></a>
        </li>
        <li>
            <a href="https://www.facebook.com/groups/812428146438230" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline"><i>VIA Sports Club</i></a>
        </li>
    </ul>

    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="night">
        <h2 class="text-2xl font-bold mb-3 text-neutral-800 dark:text-neutral-900">Nightlife</h2>
        <p class="text-neutral-700 dark:text-neutral-700 leading-relaxed">You up for some fun? <a href="https://maps.app.goo.gl/EAvE9bzDi7xt4MgRA" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">Graven street</a> is what it's all about.</p>
        <p class="text-neutral-700 dark:text-neutral-700 leading-relaxed">Graven street is packed with bars and clubs where students and locals hang out, grab drinks, and party late into the night. If you want to meet new people or just have a good time, this is the place to go.</p>
        <p class="text-neutral-700 dark:text-neutral-700 leading-relaxed">"All right, so, one street and that's it?" Hold your horses cowboy, I'ma show you the sauce:</p>
    </div>

    <div class="mt-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Club 1 -->
            <div class="flex flex-col items-center">
            <img src="https://impro.usercontent.one/appid/oneComWsb/domain/jagt.bar/media/jagt.bar/onewebmedia/25352290_1204599622973764_6187841545328537817_o___serialized1.jpg?etag=W%2F%2218e485-618c2e4e%22&sourceContentType=image%2Fjpeg&quality=85" alt="Jagtbar" class="rounded-xl shadow mb-3 object-cover" style="width:480px;height:320px;">
            <h3 class="text-xl font-semibold text-neutral-800 dark:text-neutral-900">Jagtbar</h3>
            <p class="text-neutral-700 dark:text-neutral-700 text-center text-lg mb-1">Nørregade 7, 8700 Horsens</p>
            <p class="text-neutral-700 dark:text-neutral-700 leading-relaxed "><a href="https://maps.app.goo.gl/uG2vKqdtndjFr7qm6" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">Google Maps</a> | <a href="https://www.instagram.com/jagtbar_horsens/" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">Instagram</a></p>
            </div>
            <!-- Club 2 -->
            <div class="flex flex-col items-center">
            <img src="https://images.jfmedier.dk/images/9/99/998/99882144-efba-4ba5-8f71-36854e079ecf_1_90_0_0_6000_4000_1440_960_b9097288.jpg" alt="Zwei Grosse Bier Bar" class="rounded-xl shadow mb-3 object-cover" style="width:480px;height:320px;">
            <h3 class="text-xl font-semibold text-neutral-800 dark:text-neutral-900">Zwei Grosse Bier Bar</h3>
            <p class="text-neutral-700 dark:text-neutral-700 text-center text-lg mb-1">Graven 21, 8700 Horsens</p>
            <p class="text-neutral-700 dark:text-neutral-700 leading-relaxed "><a href="https://maps.app.goo.gl/Diap1cSGqmqz4Br68" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">Google Maps</a></p>
            </div>
            <!-- Club 3 -->
            <div class="flex flex-col items-center">
            <img src="https://instagram.fcph3-1.fna.fbcdn.net/v/t39.30808-6/533028433_1531524578260004_1141193523960534375_n.jpg?stp=dst-jpg_e35_tt6&efg=eyJ2ZW5jb2RlX3RhZyI6IkZFRUQuaW1hZ2VfdXJsZ2VuLjIwNDh4MTM2NS5zZHIuZjMwODA4LmRlZmF1bHRfaW1hZ2UuYzIifQ&_nc_ht=instagram.fcph3-1.fna.fbcdn.net&_nc_cat=108&_nc_oc=Q6cZ2QFH4jwccKwcufCKTsbjsrR6U6ruW0WgfKO58xCXJKUQ3SUCa8qrBiYWSr1DhfkhcyU&_nc_ohc=duxA5paEqTwQ7kNvwGjSCW6&_nc_gid=k9PGQ-KhOWTzVMUif9SYCQ&edm=AP4sbd4AAAAA&ccb=7-5&ig_cache_key=MzcwMDQ5MDQ2Mzc4MzIwMzg1Nw%3D%3D.3-ccb7-5&oh=00_AfWI03k1rLQ_fkAzt5jZwXu64aOvSOkTz7f6o9zCm54JiQ&oe=68A9659D&_nc_sid=7a9f4b" alt="Jagtbar" class="rounded-xl shadow mb-3 object-cover" style="width:480px;height:320px;">
            <h3 class="text-xl font-semibold text-neutral-800 dark:text-neutral-900">Sölibat Natklub</h3>
            <p class="text-neutral-700 dark:text-neutral-700 text-center text-lg mb-1">Rædersgade 5, 8700 Horsens</p>
            <p class="text-neutral-700 dark:text-neutral-700 leading-relaxed "><a href="https://maps.app.goo.gl/GoQ55zSdiuFT6CQ69" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">Google Maps</a> | <a href="https://www.instagram.com/solibatnatklub/" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">Instagram</a></p>
            </div>
            <!-- Club 4 -->
            <div class="flex flex-col items-center">
            <img src="https://scontent.fcph2-1.fna.fbcdn.net/v/t39.30808-6/483102780_663969076109634_793457708211679003_n.jpg?stp=cp6_dst-jpg_tt6&_nc_cat=105&ccb=1-7&_nc_sid=833d8c&_nc_ohc=H_BZj6EnTI4Q7kNvwGGOUC2&_nc_oc=AdkQKrkct6LWKcJ1JQ-C9mgAUjUSo1zGaoeh9A74QCrmClwxiLcV0zFTMPTc3sWJJgY&_nc_zt=23&_nc_ht=scontent.fcph2-1.fna&_nc_gid=Rs_YvW_G5cV0wCyrWplyww&oh=00_AfVVQcc9bHffUOB6F0uBz_l7I85BK2p-yxG1nIv7_2OLXg&oe=68A94DBE" alt="Stalden" class="rounded-xl shadow mb-3 object-cover" style="width:480px;height:320px;">
            <h3 class="text-xl font-semibold text-neutral-800 dark:text-neutral-900">Stalden</h3>
            <p class="text-neutral-700 dark:text-neutral-700 text-center text-lg mb-1">Rædersgade 3, st, 8700 Horsens</p>
            <p class="text-neutral-700 dark:text-neutral-700 leading-relaxed "><a href="https://maps.app.goo.gl/xYDGKJiA1DE6bBvz8" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">Google Maps</a> | <a href="https://www.instagram.com/staldenhorsens/" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">Instagram</a></p>
            </div>
            <!-- Club 5 -->
            <div class="flex flex-col items-center">
            <img src="https://skala.dk/application/files/1416/4182/1592/01-det-gule-pakhus-platform-k-kulturhus-containere-baeredygtig-tilbygning.jpg" alt="Platform K" class="rounded-xl shadow mb-3 object-cover" style="width:480px;height:320px;">
            <h3 class="text-xl font-semibold text-neutral-800 dark:text-neutral-900">Platform K</h3>
            <p class="text-neutral-700 dark:text-neutral-700 text-center text-lg mb-1">Madevej 2, 8700 Horsens</p>
            <p class="text-neutral-700 dark:text-neutral-700 leading-relaxed "><a href="https://maps.app.goo.gl/JL1SdvTaq7dbcVi18" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">Google Maps</a> | <a href="https://www.instagram.com/platformk.dk/" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">Instagram</a></p>
            </div>
            <!-- Club 6 -->
            <div class="flex flex-col items-center">
            <img src="https://kamtjatka.dk/f/thumb?src=/f/gallery/e466494efc213a36898779fda31c574842bab3cb.jpg&w=1000" alt="Kamtjatka" class="rounded-xl shadow mb-3 object-cover" style="width:480px;height:320px;">
            <h3 class="text-xl font-semibold text-neutral-800 dark:text-neutral-900">Kamtjatka <small>(on weekends)</small></h3>
            <p class="text-neutral-700 dark:text-neutral-700 text-center text-lg mb-1">Kamtjatka, 8700 Horsens</p>
            <p class="text-neutral-700 dark:text-neutral-700 leading-relaxed "><a href="https://maps.app.goo.gl/XdGy2SdHDQhMM9ew8" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">Google Maps</a> | <a href="https://www.instagram.com/studentvillagekamtjatka/" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">Instagram</a></p>
            </div>
        </div>
    </div>
</x-inside-layout>

