<x-inside-layout :sections="[
    ['id' => 'mission', 'label' => 'Our Mission'],
    ['id' => 'features', 'label' => 'Features'],
    ['id' => 'disclaimer', 'label' => 'Disclaimer'],
    ['id' => 'contact', 'label' => 'Get in Touch']
]">
    <x-slot:heading>About VIA Student Cheatsheet</x-slot:heading>

    <!-- Mission Section -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="mission">
        <h2 class="text-2xl font-bold mb-3 text-neutral-900">Our Mission</h2>
        <p class="text-neutral-700 leading-relaxed mb-4">
            VIA Student Cheatsheet was born from the experiences of international students at VIA University College who faced countless challenges navigating Danish bureaucracy, finding accommodation, understanding banking systems, and adapting to life in Denmark.
        </p>
        <p class="text-neutral-700 leading-relaxed mb-4">
            We recognized that much of the essential information students need is scattered across various websites, often in Danish, or exists only as "gatekept knowledge" shared informally among students. Our mission is to break down these barriers and make crucial information accessible to everyone.
        </p>
        <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.336-.213 3.011-1.743 3.011H4.42c-1.53 0-2.493-1.675-1.743-3.011l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-blue-700">
                        <strong>Important:</strong> This website focuses primarily on information relevant to EU/EEA/Swiss/Nordic citizens studying at VIA University College.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- Features Section -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="features">
        <h2 class="text-2xl font-bold mb-3 text-neutral-900">What We Offer</h2>
        <p class="text-neutral-700 leading-relaxed mb-6">
            Our cheatsheet covers all the essential areas that international students need to navigate when studying in Denmark.
        </p>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
                <div class="flex items-center mb-2">
                    <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <h3 class="font-semibold text-blue-900">Documents</h3>
                </div>
                <p class="text-blue-800 text-sm">CPR, SIRI, Tax cards, SU, Yellow Card, Student ID - all the paperwork explained</p>
            </div>

            <div class="bg-green-50 rounded-lg p-4 border border-green-200">
                <div class="flex items-center mb-2">
                    <svg class="w-6 h-6 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                    </svg>
                    <h3 class="font-semibold text-green-900">Banking</h3>
                </div>
                <p class="text-green-800 text-sm">Bank recommendations, payment methods, and financial tips for Denmark</p>
            </div>

            <div class="bg-purple-50 rounded-lg p-4 border border-purple-200">
                <div class="flex items-center mb-2">
                    <svg class="w-6 h-6 text-purple-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                    </svg>
                    <h3 class="font-semibold text-purple-900">Work & Employment</h3>
                </div>
                <p class="text-purple-800 text-sm">Part-time job search, salary expectations, and work regulations for students</p>
            </div>

            <div class="bg-red-50 rounded-lg p-4 border border-red-200">
                <div class="flex items-center mb-2">
                    <svg class="w-6 h-6 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <h3 class="font-semibold text-red-900">Accommodation</h3>
                </div>
                <p class="text-red-800 text-sm">Housing search, support applications, pricing, and what to watch out for</p>
            </div>

            <div class="bg-yellow-50 rounded-lg p-4 border border-yellow-200">
                <div class="flex items-center mb-2">
                    <svg class="w-6 h-6 text-yellow-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a4 4 0 118 0v4m-4 0h4m-4 0H8m0 0H4a2 2 0 00-2 2v6a2 2 0 002 2h4m0 0v4m0-4h8m-8 0H4m16-6V9a2 2 0 00-2-2h-4"></path>
                    </svg>
                    <h3 class="font-semibold text-yellow-900">Transportation</h3>
                </div>
                <p class="text-yellow-800 text-sm">Public transport, biking culture, and getting around Danish cities efficiently</p>
            </div>

            <div class="bg-indigo-50 rounded-lg p-4 border border-indigo-200">
                <div class="flex items-center mb-2">
                    <svg class="w-6 h-6 text-indigo-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <h3 class="font-semibold text-indigo-900">Social Life & Culture</h3>
                </div>
                <p class="text-indigo-800 text-sm">Making friends, understanding Danish culture, and building your social network</p>
            </div>
        </div>
    </div>

    <!-- Disclaimer Section -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="disclaimer">
        <h2 class="text-2xl font-bold mb-3 text-neutral-900">Important Disclaimer</h2>

        <div class="bg-amber-50 border-l-4 border-amber-500 p-4 mb-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-amber-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.336-.213 3.011-1.743 3.011H4.42c-1.53 0-2.493-1.675-1.743-3.011l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-amber-700">
                        <strong>Independent Website:</strong> This website is created and maintained by students and is not officially affiliated with or endorsed by VIA University College.
                    </p>
                </div>
            </div>
        </div>

        <div class="space-y-4">
            <div>
                <h3 class="font-semibold text-gray-900 mb-2">Information Accuracy</h3>
                <p class="text-neutral-700 text-sm leading-relaxed">
                    While we strive to provide accurate and up-to-date information, regulations, procedures, and requirements can change. Always verify important information with official sources such as VIA University College, Danish authorities, or relevant institutions.
                </p>
            </div>

            <div>
                <h3 class="font-semibold text-gray-900 mb-2">Personal Responsibility</h3>
                <p class="text-neutral-700 text-sm leading-relaxed">
                    The information provided is based on personal experiences and research. Every student's situation is unique, and what works for one person may not work for another. Use this information as a starting point, but always conduct your own research and seek professional advice when needed.
                </p>
            </div>

            <div>
                <h3 class="font-semibold text-gray-900 mb-2">Target Audience</h3>
                <p class="text-neutral-700 text-sm leading-relaxed">
                    The information on this website is primarily targeted toward EU/EEA/Swiss/Nordic citizens studying at VIA University College. Requirements and procedures may differ significantly for students from other countries.
                </p>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="contact">
        <h2 class="text-2xl font-bold mb-3 text-neutral-900">Get in Touch</h2>
        <p class="text-neutral-700 leading-relaxed mb-6">
            We're always looking to improve and expand our cheatsheet. If you have suggestions, corrections, or want to contribute, we'd love to hear from you!
        </p>

        <div class="grid md:grid-cols-2 gap-6">
            <div>
                <h3 class="font-semibold text-gray-900 mb-3">Ways to Contribute</h3>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Submit corrections or updates to existing information
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Share your own experiences and tips
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Suggest new topics or sections
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Report broken links or outdated information
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold text-gray-900 mb-3">Contact Methods</h3>
                <div class="space-y-3">
                    <a href="https://github.com/xvvcs/viacheatsheet/issues" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Contact Us on GitHub
                    </a>
                    <p class="text-sm text-gray-600">
                        Use our contact form for feedback, suggestions, or questions about the content.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Message -->
    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl shadow p-6 border border-blue-200">
        <div class="text-center">
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Thank You for Using VIA Student Cheatsheet!</h3>
            <p class="text-gray-700 mb-4">
                We hope this resource makes your student life in Denmark a little bit easier. Remember, we're all in this together - the international student community is here to support each other.
            </p>
            <p class="text-sm text-gray-600 italic">
                "The best way to find yourself is to lose yourself in the service of others." - Mahatma Gandhi
            </p>
        </div>
    </div>

</x-inside-layout>
