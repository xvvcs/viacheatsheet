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
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mt-2">We recommend booking an appointment <strong>as early as possible</strong>, due to busy SIRI timetables. The closest SIRI department would be in Aarhus or Odense.</p>


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
                <li>Wait until the application is processed and <a href="https://forms.nyidanmark.dk/siri/Overview" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">you receive a response</a> (approx. 1 week of waiting)</li>
            </ul>
        </li>
        <li>
            Book an in-person appointment at the SIRI office
            <ul class="ps-5 mt-2 space-y-1 list-inside list-disc">
                <li><a href="https://scandic.cleverq.de/public/locations/siri_dk/index.html?lang=en" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">Go to this site</a> and book an appointment in the nearest SIRI office</li>
                <li>Choose a suitable time slot</li>
                <li>Make sure you have the receipt of the online application and your passport or national ID card</li>
                <li>Appear in person at the SIRI office and complete the necessary formalities (approx. 30min)</li>
                <li>Wait for the answer from SIRI (approx. 1-2 weeks)</li>
            </ul>
        </li>
    </ul>

    <!-- CPR -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="cpr">
    <p class="font-bold mb-3 text-neutral-700 md:text-2xl dark:text-neutral-900">CPR (Central Person Register)</p>
    <p class="text-gray-500 dark:text-neutral-700">All residents in Denmark need to have a CPR number. You need it to open a bank account, access your health insurance, borrow books from the library, pay tax, receive a salary and so on. Total must have.</p>

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
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="shrink-0 w-3.5 h-3.5 text-green-700 dark:text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    <span>Signed accommodtation contract</span>
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
            You can read more on <a href="https://lifeindenmark.borger.dk/settle-in-denmark/ics-international-citizen-service/ics-west-in-aarhus?frm2=micro-articles-list-f180e8a0-6f4e-47b8-aa8b-4e55284d7bb8" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">ICS West website.</a> Follow steps there.
            <ul class="ps-5 mt-2 space-y-1 list-inside list-disc">
            </ul>
            <p class="text-gray-500 whitespace-normal dark:text-gray-400">As far as we remember (it may be old way), you could have booked a meeting on a <a href="https://horsens.dk/workandstudy/newtohorsens/officialmatters" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">Horsens Kommune</a> website and go there to get your CPR number, which would make you avoid taking a trip to Aarhus. Or just go there without an appointment and stand in a queue for a while.</p>
        </li>
        <li>
            The whole applying process will probably take 1-2 hours or so, therefore make sure to have all your documents ready. Then, you will receive a CPR number on the spot, which is great but <p class="font-semibold text-gray-900 underline dark:text-black decoration-red-500">you won't get your Yellow Card right away. Waiting for Yellow Card is approximately 1-3 weeks.</p>
        </li>
        <li>
            Now, when you have your CPR number, you can do a lot of things, like opening a bank account, opening a MitID account, getting a phone number, etc. But remember, you still need to wait for your Yellow Card to be able to access the Danish healthcare system.
        </li>
    </ul>

    <!-- Tax Cards -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="tax">
    <p class="font-bold mb-3 text-neutral-700 md:text-2xl dark:text-neutral-900">Tax Cards</p>
    <p class="text-gray-500 dark:text-neutral-700">You need them to be able to get that bread. Denmark has high taxes, but there are couple tricks you can do to get the most as a student. In Denmark, there are 3 types of tax cards you should know about.</p>

    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <div class="mb-3">
            <p class="mb-3 text-lg text-neutral-700 md:text-xl dark:text-neutral-600">Prequisities:</p>

            <ul class="space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4">
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="shrink-0 w-3.5 h-3.5 text-green-700 dark:text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    <span>CPR</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="shrink-0 w-3.5 h-3.5 text-green-700 dark:text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    <span>Signed accommodation contract</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="shrink-0 w-3.5 h-3.5 text-green-700 dark:text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    <span>Yellow Card</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="shrink-0 w-3.5 h-3.5 text-green-700 dark:text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    <span>MitID or TastSelv-kode</span>
                </li>
            </ul>
        </div>
    </div>

    <h2 class="text-2xl font-bold dark:text-neutral-900">Tax <mark class="px-2 text-white bg-blue-600 rounded-sm dark:bg-blue-500">cards</mark> in a nutshell:</h2>
    <br>
    <p class="pl-6 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 text-base">Tax card is a generic term for primary tax card (hovedkort), secondary tax card (bikort) and tax exemption card (frikort). You can read about how to get them in detail <a href="https://skat.dk/en-us/businesses/employees-and-pay/non-danish-labour/get-a-tax-card-as-a-non-danish-employee?oid=2244407&vid=0" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">here.</a> While applying they will ask you for approx. year income and so on, so be prepared.
        Don't worry, any amounts put too high will be <span class="font-semibold text-gray-900 underline dark:text-black decoration-indigo-500">returned in TAX return on March.</span> Better put it a bit higher than actual year income to be sure you chill.</p>
    <p class="pl-6 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 text-base"><strong>We recommend you don’t apply for your tax card until 1 month before you start your job,</strong> as they simply might not manage to get it for you before you start work. With that said, once you are <i><strong>sure</strong></i> you will get it, apply right away.</p>
    <p class="pl-6 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 text-base">By default, you set it to receive your salary on a hovedkort(A card) and put SU on bikort(B card). We mean by default, because, usually the monthly salary is bigger than SU, which means if we want the highest income with the lowest paid in TAX,
        <span class="font-semibold text-gray-900 underline dark:text-black decoration-indigo-500">we put the HIGH income on A card and LOWER income on B card, so the lower income gets taxed the most and high income the lowest.</span>  </p>
    <ul class="pl-6 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 list-decimal text-base">
        <li>
            <span class=" font-bold">Primary tax card (hovedkort)</span> states both the amount you will not be taxed on (your personal allowance) and the tax rate you will have to pay.
            <ul class="ps-5 mt-2 space-y-1 list-inside list-disc">
                <li>Your personal tax rate is calculated based on an 8% labor market tax, average municipal tax of ~25.068%, and progressive state taxes of 12.01% and 15%. <p class="font-semibold text-gray-900 underline dark:text-black decoration-red-500">TLDR; Approx. 20-30% of your salary will be TAXED</p></li>
            </ul>
        </li>
        <li>
            <span class=" font-bold">Secondary tax card (bikort)</span> states your tax rate. You should only use your secondary tax card if you have more than one provider OR if you are getting the SU (Danish state educational grant).
            <ul class="ps-5 mt-2 space-y-1 list-inside list-disc">
                <li>
                    B-tax is the tax you pay on B-income. B-income includes fees, remuneration, profits from self-employment, interest income, free meals and lodging, etc.
                </li>
            </ul>
        </li>
        <li>
            <span class=" font-bold">Tax exemption card (frikort)</span> allows you to earn a certain amount of money without paying taxes. You should only use it if you have a low income.
            <ul class="ps-5 mt-2 space-y-1 list-inside list-disc">
                <li>In 2025, the tax exemption card allows you to earn up to 51,600 DKK (job + SU) without paying taxes.</li>
            </ul>
        </li>
    </ul>

    <p class="pl-6 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 text-base">Calculate your expected profit <a href="https://salaryaftertax.com/salary-calculator/denmark" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">here.</a></p>

    <!-- SU -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="su">
    <p class="font-bold mb-3 text-neutral-700 md:text-2xl dark:text-neutral-900">SU (Danish state educational grant)</p>
        <p class="text-gray-500 dark:text-neutral-700"><span class="font-semibold text-gray-900 underline dark:text-black decoration-indigo-500">This is the sauce.</span> SU stands for Statens Uddannelsesstøtte, which is the Danish State Educational Grant and Loan Scheme. It is a financial aid program that provides financial support to eligible students studying at institutions of higher education in Denmark.</p>
        <p class="text-gray-500 dark:text-neutral-700"> You will receive approx. 1000$ per month. So, to put it into perspective its <strong>7000DKK before tax - 4500DKK after tax (SU on B tax card).</strong></p>

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
                    <span>Have been/will be working in Denmark for at least 10-12 hours per week. (Just be sure to have 40h total per month)</span>
            </ul>
            <ul class="space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4">
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="shrink-0 w-3.5 h-3.5 text-green-700 dark:text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    <span>You don't receive any other public benefits (I believe you can still apply for Accommodation Support tho)</span>
            </ul>
            <ul class="space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4">
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="shrink-0 w-3.5 h-3.5 text-green-700 dark:text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    <span>MitID</span>
            </ul>
            <ul class="space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4">
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="shrink-0 w-3.5 h-3.5 text-green-700 dark:text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    <span>NemKonto account</span>
            </ul>
            <ul class="space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4">
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="shrink-0 w-3.5 h-3.5 text-green-700 dark:text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    <span>DigitalPost account (e-boks)</span>
            </ul>
            <ul class="space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4">
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="shrink-0 w-3.5 h-3.5 text-green-700 dark:text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    <span>Equal citizen status document</span>
            </ul>
        </div>
    </div>

    <h2 class="text-2xl font-bold dark:text-neutral-900">How to <mark class="px-2 text-white bg-blue-600 rounded-sm dark:bg-blue-500">apply</mark> for SU:</h2>
    <br>
    <ul class="pl-6 space-y-4 text-left text-gray-500 dark:text-gray-800 mb-4 list-decimal text-base">
        <li>
            Be sure you have your Equal citizen status document ready.
            <ul class="ps-5 mt-2 space-y-1 list-inside list-disc">
                <li>If not, create minSU account </li>
                <li>Go to <a href="https://lifeindenmark.borger.dk/ActionPage?selfserviceId=6881042e-3cc5-4e19-abc8-c44834eab8da&referringPageId=b4385e97-c278-4a61-ba15-d1280756f661&type=DK&cookiebanner=true" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">official SU website</a></li>
                <li>Follow their instructions.</li>
            </ul>
        </li>
        <li>
            Be sure you have the job.
            <ul class="ps-5 mt-2 space-y-1 list-inside list-disc">
                <li>You need to have proof of employment.</li>
                <li>You will know if you can (you will) be granted SU based on monthly income. <span class="font-semibold text-gray-900 underline dark:text-black decoration-red-500">Don't exceed 19000DKK before tax per month to avoid receiving SU return notice. </span></li>
            </ul>
        </li>
        <li>
            With everything ready, you can <a href="https://lifeindenmark.borger.dk/ActionPage?selfserviceId=6881042e-3cc5-4e19-abc8-c44834eab8da&referringPageId=b4385e97-c278-4a61-ba15-d1280756f661&type=DK&cookiebanner=true" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">apply for SU.</a>
            <ul class="ps-5 mt-2 space-y-1 list-inside list-disc">
                <li><strong>IN CASE</strong>, you don't have any savings/income/collectibles/money on you, make sure to address that in the SU form, so you get the highest amount. (Only in case if you don't have them, of course...)</li>
            </ul>
        </li>
    </ul>

    <p class="text-gray-500 dark:text-neutral-700">We recommend you apply for SU <span class="font-semibold text-gray-900 underline dark:text-black decoration-indigo-500">right after you get the employment contract.</span> It is due to long waiting times to get a response <strong>  (approx 2-4 weeks)</strong> and I assume we want to get the SU ASAP.</p>

</x-inside-layout>
