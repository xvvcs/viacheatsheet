<x-inside-layout :sections="[
    ['id' => 'siri', 'label' => 'SIRI'],
    ['id' => 'cpr', 'label' => 'CPR'],
    ['id' => 'tax', 'label' => 'Tax Cards'],
    ['id' => 'su', 'label' => 'SU'],
]">
    <x-slot:heading>Documents cheatsheet</x-slot:heading>

    <div class="flex items-center p-4 mb-8 text-sm text-red-800 border border-red-300 rounded-lg bg-red-100" role="alert">
        <svg class="flex-shrink-0 inline w-5 h-5 mr-3 text-red-700" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l6.518 11.59c.75 1.336-.213 3.011-1.742 3.011H3.481c-1.53 0-2.492-1.675-1.742-3.011l6.518-11.59zM11 14a1 1 0 10-2 0 1 1 0 002 0zm-1-2a1 1 0 01-1-1V8a1 1 0 112 0v3a1 1 0 01-1 1z" clip-rule="evenodd"></path>
        </svg>
        <span class="font-medium">The information you can find here is ONLY for the residents of EU/EEA/Swiss/Nordic.</span>
    </div>

    <!-- SIRI (EU Residence Document) -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="siri">
        <h2 class="text-2xl font-bold mb-3 text-neutral-800 dark:text-neutral-900">SIRI (EU Residence Document)</h2>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed">If you’re an EU/EEA/Swiss or Nordic citizen – or a family member of one – you’ll need an EU residence document to show your right to live in Denmark.</p>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2">You can stay in Denmark for up to 3 months without it (or 6 months if you’re looking for a job). But if you plan to stay longer, make sure to apply for your residence document before that time runs out.</p>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2">It’s also important to know that this document is a <u class="underline">key step in getting your CPR number</u>, which you’ll need for many things in Denmark.</p>

        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <div class="mb-3">
            <p class="mb-3 text-lg text-neutral-700 md:text-xl dark:text-neutral-600">Prequisities:</p>

            <ul class="space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4">
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="shrink-0 w-3.5 h-3.5 text-green-700 dark:text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    <span>VIA Acceptance letter</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="shrink-0 w-3.5 h-3.5 text-green-700 dark:text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    <span>Passport or ID License photo</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="shrink-0 w-3.5 h-3.5 text-green-700 dark:text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    <span>Declaration of financial self-support</span>
                </li>
            </ul>
        </div>
    </div>

    <h2 class="text-2xl font-bold dark:text-neutral-900">Step by step process:</h2>
    <br>
    <ul class="pl-6 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 list-decimal text-base">
        <li>
            Gather your documents and <a href="https://www.nyidanmark.dk/en-GB/You-want-to-apply/Residence-as-a-Nordic-citizen-or-EU-or-EEA-citizen/EU-student?anchor=howtoapply" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">apply online at SIRI website.</a>
        </li>
        <li>
            Fill out the application form
            <ul class="ps-5 mt-2 space-y-1 list-inside list-disc">
                <li>Create a <a href="https://forms.nyidanmark.dk/siri/Task/Edit/520662" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline"><span class="italic">ny i denmark</span> account</a></li>
                <li>Complete the application form</li>
                <li>Wait until the application is processed and <a href="https://forms.nyidanmark.dk/siri/Overview" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">you receive a response</a></li>
            </ul>
        </li>
        <li>
            Book an in-person appointment at the SIRI office
            <ul class="ps-5 mt-2 space-y-1 list-inside list-disc">
                <li><a href="https://scandic.cleverq.de/public/locations/siri_dk/index.html?lang=en" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">Go to this site</a> and book an appointment in the nearest SIRI office</li>
                <li>Choose a suitable time slot</li>
                <li>Make sure you have the receipt of the online application and your passport or national ID card</li>
                <li>Appear in person at the SIRI office and complete the necessary formalities</li>
                <li>Wait for the answer from SIRI</li>
            </ul>
        </li>
    </ul>

    <!-- CPR -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="cpr">
    <p class="font-bold mb-3 text-neutral-700 md:text-2xl dark:text-neutral-900">CPR (Central Person Register)</p>
    <p class="text-gray-500 dark:text-neutral-700">All residents in Denmark need to have a CPR number. You need it to open a bank account, access your health insurance, borrow books from the library, pay tax, receive a salary and so on.</p>

    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <div class="mb-3">
            <p class="mb-3 text-lg text-neutral-700 md:text-xl dark:text-neutral-600">Prequisities:</p>

            <ul class="space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4">
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="shrink-0 w-3.5 h-3.5 text-green-700 dark:text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    <span>EU residence document</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="shrink-0 w-3.5 h-3.5 text-green-700 dark:text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    <span>Passport or ID License</span>
                </li>
            </ul>
        </div>
    </div>

    <h2 class="text-2xl font-bold dark:text-neutral-900">How to get your <mark class="px-2 text-white bg-blue-600 rounded-sm dark:bg-blue-500">CPR</mark> as fast as you can?</h2>
    <br>
    <ul class="pl-6 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 list-decimal text-base">
        <li>
            Visit your nearest Borgerservice (citizen service centre, best option) or book a CPR number application appointment at <a href="https://lifeindenmark.borger.dk/settle-in-denmark/ics-international-citizen-service" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">International Citizen Service Centre.</a>
        </li>
        <li>
            <-- tu jak dalej idzie aplikacja -->
            <ul class="ps-5 mt-2 space-y-1 list-inside list-disc">
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </li>
    </ul>

    <!-- Tax Cards -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="tax">
    <p class="font-bold mb-3 text-neutral-700 md:text-2xl dark:text-neutral-900">Tax Cards</p>
    <p class="text-gray-500 dark:text-neutral-700">In Denmark, there are 3 types of tax cards you should know about.</p>

    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <div class="mb-3">
            <p class="mb-3 text-lg text-neutral-700 md:text-xl dark:text-neutral-600">Prequisities:</p>

            <ul class="space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4">
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="shrink-0 w-3.5 h-3.5 text-green-700 dark:text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    <span>CPR</span>
            </ul>
        </div>
    </div>

    <h2 class="text-2xl font-bold dark:text-neutral-900">Tax <mark class="px-2 text-white bg-blue-600 rounded-sm dark:bg-blue-500">cards</mark> in a nutshell:</h2>
    <br>
    <p class="pl-6 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 text-base">Tax card is a generic term for primary tax card (hovedkort), secondary tax card (bikort) and tax exemption card (frikort).</p>
    <ul class="pl-6 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 list-decimal text-base">
        <li>
            <span class=" font-bold">Primary tax card (hovedkort)</span> states both the amount you will not be taxed on (your personal allowance) and the tax rate you will have to pay.
            <ul class="ps-5 mt-2 space-y-1 list-inside list-disc">
                <li>Your personal tax rate is calculated based on an 8% labor market tax, average municipal tax of ~25.068%, and progressive state taxes of 12.01% and 15%.</li>
            </ul>
        </li>
        <li>
            <span class=" font-bold">Secondary tax card (bikort)</span> states your tax rate. You should only use your secondary tax card if you have more than one provider OR if you are getting the SU (Danish state educational grant).
        </li>
        <li>
            <span class=" font-bold">Tax exemption card (frikort)</span> allows you to earn a certain amount of money without paying taxes. You should only use it if you have a low income.
            <ul class="ps-5 mt-2 space-y-1 list-inside list-disc">
                <li>In 2025, the tax exemption card allows you to earn up to 51,600 DKK (job + SU) without paying taxes.</li>
            </ul>
        </li>
    </ul>

    <!-- SU -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="su">
    <p class="font-bold mb-3 text-neutral-700 md:text-2xl dark:text-neutral-900">SU (Danish state educational grant)</p>
    <p class="text-gray-500 dark:text-neutral-700">SU stands for Statens Uddannelsesstøtte, which is the Danish State Educational Grant and Loan Scheme. It is a financial aid program that provides financial support to eligible students studying at institutions of higher education in Denmark.</p>

    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <div class="mb-3">
            <p class="mb-3 text-lg text-neutral-700 md:text-xl dark:text-neutral-600">Prequisities:</p>

            <ul class="space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4">
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="shrink-0 w-3.5 h-3.5 text-green-700 dark:text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    <span>You are a worker or self-employed person in Denmark under EU law and will continue to work while studying</span>
            </ul>
            <ul class="space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4">
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="shrink-0 w-3.5 h-3.5 text-green-700 dark:text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    <span>Have been working in Denmark for at least 10-12 hours per week</span>
            </ul>
        </div>
    </div>

    <h2 class="text-2xl font-bold dark:text-neutral-900">How to <mark class="px-2 text-white bg-blue-600 rounded-sm dark:bg-blue-500">apply</mark> for SU:</h2>
    <br>
    <ul class="pl-6 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 list-decimal text-base">
        <li>
            fuck do i know
            <ul class="ps-5 mt-2 space-y-1 list-inside list-disc">
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </li>
        <li>
            
            <ul class="ps-5 mt-2 space-y-1 list-inside list-disc">
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </li>
    </ul>

</x-inside-layout>