<x-inside-layout :sections="[
    ['id' => 'goin', 'label' => 'Goin\''],
    ['id' => 'fb', 'label' => 'Facebook groups']
]">
    <x-slot:heading>Social</x-slot:heading>

    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="goin">
        <span class="w-10 h-10 flex items-center justify-center mr-3 pb-2">
            <img src="https://play-lh.googleusercontent.com/uvQro_BcBsK-mdmUbKKE0IP_XOyDIBieMJOhkgOSwNXdrESlzgOsbNyqioX2r2fNtEE" alt="Goin' App Icon">
        </span>
        <h2 class="text-2xl font-bold mb-3 text-neutral-800 dark:text-neutral-900">Goin'</h2>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed">Goin' is a social networking app designed to help students connect, discover events, and join groups based on shared interests. It's an app designed to help new students, especially internationals, connect with each other.</p>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed">Once you get accepted to VIA University College, you should receive an invitation on your university email to join the Goin' app community.</p>
    </div>

    <h2 class="text-2xl font-bold dark:text-neutral-900">Step by step process:</h2>
    <br>
    <ul class="pl-6 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 list-decimal text-base">
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
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed">Once you're settled in, you'll find that a lot happens on Facebook. It's where you'll get the inside scoop on events, find a cheap couch, look for an apartment or connect with the wider student community. Many Danes use Facebook and that's why you should too.</p>
    </div>

    <h2 class="text-2xl font-bold dark:text-neutral-900">Here are some Facebook groups we think you should consider joining:</h2>
    <br>
    <ul class="pl-6 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 list-disc text-base">
        <li>
            <a href="https://www.facebook.com/groups/Horsen.Int" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline"><i>HORSENS INTERNATIONAL COMMUNITY</i></a> and <a href="https://www.facebook.com/groups/206473553264744" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline"><i>Horsens International</i></a>
            <p class="pl-6 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 text-base pt-2">
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

</x-inside-layout>

