<x-inside-layout :sections="[
    ['id' => 'work', 'label' => 'How to find a job?'],
    ['id' => 'earnings', 'label' => 'Estimated earnings'],
    ['id' => 'feriepenge', 'label' => 'How feriepenge works?'],
    ['id' => 'job-recommendation', 'label' => 'Recommended job sites'],
    ['id' => 'internship', 'label' => 'Internship'],



]">
    <x-slot:heading>Work</x-slot:heading>

    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="work">
        <h3 class="text-2xl font-bold mb-3 text-neutral-800 dark:text-neutral-900">How to find a <mark class="px-2 text-white bg-blue-500 rounded-sm dark:bg-blue-500">job?</mark></h3>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed">It may feel a bit overwhelming to find a job, but don't worry. There always is a way to find it.</p>

        <hr class="h-px my-8 bg-gray-700 border-0">

        <h2 class="mb-2 mt-4 text-lg font-semibold text-gray-900 dark:text-black">Temporary work agencies</h2>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mb-4">Temporary work agencies are a great way to find a job. They have many job offers and can help you find a job that fits your skills and schedule. They do most of the "dirty" work needed to find an employer.</p>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mb-4">Unfortunately, the work is temporary and you can suddenly get fired. Also, the earnings are lower (as far as I heard).</p>
        <h2 class="text-2xl font-bold mb-3 text-neutral-800 dark:text-neutral-900">JKS</h2>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mb-4">JKS is one of Denmark's largest and most well-known temp and recruitment agencies, and they have a local office right here in Horsens.
            You sign up with them for free, creating a profile with your skills, experience, and what kind of work you're looking for. Companies in and around Horsens who need staff then contact JKS.</p>


        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-800 font-semibold">
            <div class="flex flex-col pb-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-black italic">Temporary work</dt>
                <p class="text-lg font-semibold text-neutral-800">This is their specialty. If a company is extra busy, needs someone to cover for an employee on sick leave, or has a short-term project, they hire a vikar through JKS. This could be for a single day, a week, or several months. It's a great way to earn money without a long-term commitment.</p>
            </div>
            <div class="flex flex-col py-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-black italic font-semibold">Try & hire</dt>
                <dd class="text-lg font-semibold text-neutral-800"> Sometimes, a temporary position can lead to a full-time job. With a "Try & Hire" setup, you start as a temp worker through JKS for a trial period. If both you and the company are happy, they offer you a permanent contract. It’s like a working interview.</dd>
            </div>
        </dl>

        <h2 class="text-2xl font-bold mb-3 mt-4 text-neutral-800 dark:text-neutral-900">Vikar A/S</h2>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mb-4">Think of Vikar A/S as another key player you should sign up with. They function as a professional matchmaker between companies needing staff and people looking for jobs. They have a strong network of client companies in Horsens and the surrounding region.</p>


        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-800 font-semibold">
            <div class="flex flex-col pb-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-black italic">Temporary work</dt>
                <p class="text-lg font-semibold text-neutral-800">They specialize in providing temporary staff to companies in various sectors. Mainly, warehouse worker, production worker, construction worker, office worker, etc.</p>
            </div>
            <div class="flex flex-col py-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-black italic font-semibold">Try & hire</dt>
                <dd class="text-lg font-semibold text-neutral-800"> Same as JSK works. You start as a temp for a few months to see if it's a good fit before getting a permanent contract. Rarely happens tho.</dd>
            </div>
        </dl>

        <hr class="h-px my-8 bg-gray-700 border-0">

        <h2 class="text-2xl font-bold mb-3 mt-4 text-neutral-800 dark:text-neutral-900">Facebook groups</h2>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mb-4">A popular way to land a job is just being part of any of the Facebook groups for internationals. You can find them in this section <a href="social#fb" class=" text-blue-700 underline hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700"> here.</a> A lot of local shops and restaurants post job offers on these groups.</p>
        <p class="font-bold text-gray-900 underline dark:text-black decoration-indigo-500">Its my personal recommendation as it gives you the most freedom.</p>
    </div>

    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="earnings">
        <h3 class="text-2xl font-bold mb-3 text-neutral-800 dark:text-neutral-900">What will be my <mark class="px-2 text-white bg-green-600 rounded-sm dark:bg-green-600">earnings?</mark></h3>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed pb-8">They really depend on the kind of work you do. But I can give you some approximates (after tax). Please be aware that these are the estimates and the actual earnings can vary due to many circumstances.</p>
        <!-- table -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-400 dark:text-gray-400">
                <thead class="text-xs text-gray-400 uppercase bg-gray-700 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-4 py-3">
                        Job name
                    </th>
                    <th scope="col" class="px-4 py-3">
                        Difficulty
                    </th>
                    <th scope="col" class="px-4 py-3">
                        Approx. hours per month
                    </th>
                    <th scope="col" class="px-4 py-3">
                        Est. earnings per month ( with SU )
                    </th>

                </tr>
                </thead>
                <tbody>
                <tr class="bg-gray-800 border-b dark:bg-gray-800 dark:border-gray-700 border-gray-700 hover:bg-gray-600 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                        Dishwashing
                    </th>
                    <td class="px-6 py-4">
                        Medium
                    </td>
                    <td class="px-6 py-4">
                        38-42h
                    </td>
                    <td class="px-6 py-4">
                        6500 - 8500 DKK
                    </td>

                </tr>
                <tr class="bg-gray-800 border-b dark:bg-gray-800 dark:border-gray-700 border-gray-700 hover:bg-gray-600 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                        Warehouse worker
                    </th>
                    <td class="px-6 py-4">
                        Exhausting
                    </td>
                    <td class="px-6 py-4">
                        42h+
                    </td>
                    <td class="px-6 py-4">
                        8000 - 13000 DKK
                    </td>

                </tr>
                <tr class="bg-gray-800 border-b dark:bg-gray-800 dark:border-gray-700 border-gray-700 hover:bg-gray-600 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                        Pizza driver
                    </th>
                    <td class="px-6 py-4">
                        Chill
                    </td>
                    <td class="px-6 py-4">
                        38h+
                    </td>
                    <td class="px-6 py-4">
                        7000 - 8500 DKK
                    </td>

                </tr>
                <tr class="bg-gray-800 border-b dark:bg-gray-800 dark:border-gray-700 border-gray-700 hover:bg-gray-600 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                        Wolt or Just Eat delivery
                    </th>
                    <td class="px-6 py-4">
                        Hard
                    </td>
                    <td class="px-6 py-4">
                        50h+
                    </td>
                    <td class="px-6 py-4">
                        7000 - 12000 DKK
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="bg-neutral-100 rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="feriepenge">
        <h3 class="text-2xl font-bold mb-3 text-neutral-900 dark:text-neutral-900">How does <mark class="px-2 text-white bg-violet-500 rounded-sm dark:bg-violet-500">feriepenge</mark> work?</h3>
        <p class="text-neutral-700 dark:text-neutral-700 leading-relaxed">It's real deal and lifesaver for your abroad holiday trips. Feriepenge is a holiday pay that you earn while working. It is usually around 12.5% of your gross salary and it is paid out when you take a holiday.</p>
        <hr class="h-px my-8 bg-gray-700 border-0 dark:bg-gray-700">

        <div class="md:flex">
            <ul class="flex-column space-y space-y-4 text-sm font-medium text-gray-400 dark:text-gray-400 md:me-4 mb-4 md:mb-0" id="feriepenge-tabs">
                <li>
                    <a href="#" class="tab-link inline-flex items-center px-4 py-3 text-white bg-blue-600 dark:bg-blue-600 active w-full" data-tab="where-to-get" aria-current="page">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-8 pr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                        </svg>
                        Where to get feriepenge?
                    </a>
                </li>
                <li>
                    <a href="#" class="tab-link inline-flex items-center px-4 py-3 rounded-lg hover:text-white bg-gray-800 hover:bg-gray-700 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white" data-tab="how-to-claim">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7 pr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 0 1 9 9v.375M10.125 2.25A3.375 3.375 0 0 1 13.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 0 1 3.375 3.375M9 15l2.25 2.25L15 12" />
                        </svg>
                        How to claim it?
                    </a>
                </li>
                <li>
                    <a href="#" class="tab-link inline-flex items-center px-4 py-3 rounded-lg hover:text-white bg-gray-800 hover:bg-gray-700 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white" data-tab="how-much">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7 pr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                        </svg>
                        How much will I get?
                    </a>
                </li>
                <li>
                    <a href="#" class="tab-link inline-flex items-center px-4 py-3 rounded-lg hover:text-white bg-gray-800 hover:bg-gray-700 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white" data-tab="be-aware">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7 pr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m0-10.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.25-8.25-3.286Zm0 13.036h.008v.008H12v-.008Z" />
                        </svg>
                        What to be aware of?
                    </a>
                </li>
            </ul>

            <div class="tab-content-container w-full">
                <!-- Where to get feriepenge -->
                <div id="where-to-get" class="tab-content p-6 bg-gray-800 text-medium text-gray-400 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full">
                    <h3 class="text-lg font-bold text-white dark:text-white mb-2">Where to get feriepenge?</h3>
                    <p class="mb-4 text-gray-300 dark:text-gray-300">Feriepenge is automatically collected through your employer and managed by the Feriekonto system.</p>

                    <h4 class="font-semibold text-white dark:text-white mb-2">Main sources:</h4>
                    <ul class="list-disc list-inside space-y-2 text-gray-300 dark:text-gray-300">
                        <li><strong>Employer contributions:</strong> 12.5% of your gross salary is automatically set aside</li>
                        <li><strong><a href="https://www.borger.dk/Handlingsside?selfserviceId=75509c74-cefd-4d4e-9bec-c25519a34aea" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">Borger.dk</a>:</strong> Check your accumulated feriepenge online</li>
                        <li><strong>FerieKonto app:</strong> Mobile access to your holiday pay balance</li>
                        <li><strong>ATP (if applicable):</strong> Additional holiday pay for certain employment types</li>
                    </ul>
                </div>

                <!-- How to claim it -->
                <div id="how-to-claim" class="tab-content p-6 bg-gray-800 text-medium text-gray-400 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full hidden">
                    <h3 class="text-lg font-bold text-white dark:text-white mb-2">How to claim feriepenge?</h3>
                    <p class="mb-4 text-gray-300 dark:text-gray-300">There are several ways to access your holiday pay depending on your situation. But you as a student, will in 99% of cases go to <a href="https://www.borger.dk/Handlingsside?selfserviceId=75509c74-cefd-4d4e-9bec-c25519a34aea" class="font-medium text-blue-600 underline dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:no-underline">Borger.dk website</a> and do it there. Just choose your employer, select amount of paid holiday days and click to claim for that period.</p>

                    <h4 class="font-semibold text-white dark:text-white mb-2">Methods to claim:</h4>
                    <ol class="list-decimal list-inside space-y-3 text-gray-300 dark:text-gray-300">
                        <li><strong>Through your employer:</strong> Request paid holiday time - they'll use your feriepenge to pay your salary during vacation</li>
                        <li><strong>FerieKonto direct payout:</strong>  You will use it the most, just manually claim the Feriepenge from your employer and select for which 'Holiday days' you use it for.</li>
                        <li><strong>Crisis withdrawal:</strong> Possible in special circumstances (unemployment, leaving Denmark, etc.)</li>
                    </ol>

                    <div class="mt-4 p-3 bg-green-200 dark:bg-green-200 rounded-lg">
                        <p class="text-sm text-green-900 dark:text-green-900"><strong>Additional info:</strong> As far as I know, you can pay it out whenever, just be sure you will or had a holiday some time ago.</p>
                    </div>
                </div>

                <!-- How much will I get -->
                <div id="how-much" class="tab-content p-6 bg-gray-800 text-medium text-gray-400 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full hidden">
                    <h3 class="text-lg font-bold text-white dark:text-white mb-2">How much feriepenge will I get?</h3>
                    <p class="mb-4 text-gray-300 dark:text-gray-300">Your feriepenge is calculated as 12.5% of your gross annual salary. Therefore, it depends on you and your salary how much you will get. Tho, I can give some examples.</p>

                    <h4 class="font-semibold text-white dark:text-white mb-2">Calculation examples:</h4>
                    <div class="space-y-3">
                        <div class="p-3 bg-gray-700 dark:bg-gray-700 rounded border">
                            <p class="font-medium text-white dark:text-white">Random monthly salary: 20,000 DKK</p>
                            <p class="text-gray-300 dark:text-gray-300">Annual: 240,000 DKK × 12.5% = <strong>30,000 DKK feriepenge</strong></p>
                        </div>
                        <div class="p-3 bg-gray-700 dark:bg-gray-700 rounded border">
                            <p class="font-medium text-white dark:text-white">Approx. REMA 1000 salary: 15,000 DKK</p>
                            <p class="text-gray-300 dark:text-gray-300">Annual: 180,000 DKK × 12.5% = <strong>22,500 DKK feriepenge</strong></p>
                        </div>
                    </div>

                    <h4 class="font-semibold text-white dark:text-white mb-2 mt-4">What affects the amount:</h4>
                    <ul class="list-disc list-inside space-y-1 text-gray-300 dark:text-gray-300">
                        <li>Your gross salary (before taxes)</li>
                        <li>Number of months worked in the earning period</li>
                        <li>Overtime and bonuses (yes, that's for you REMA 1000 Warriors) also contribute 12.5%</li>
                    </ul>

                    <div class="mt-4 p-3 bg-yellow-100 dark:bg-yellow-100 rounded-lg">
                        <p class="text-sm text-yellow-800 dark:text-yellow-800"><strong>Note:</strong> Feriepenge is paid out gross, so taxes will be deducted when you receive it. All feriepenge you see on the website is BEFORE tax, so account that.</p>
                    </div>
                </div>

                <!-- What to be aware of -->
                <div id="be-aware" class="tab-content p-6 bg-gray-800 text-medium text-gray-400 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full hidden">
                    <h3 class="text-lg font-bold text-white dark:text-white mb-2">What to be aware of?</h3>
                    <p class="mb-4 text-gray-300 dark:text-gray-300">There are important rules and limitations you should know about feriepenge.</p>

                    <h4 class="font-semibold text-red-400 dark:text-red-400 mb-2">⚠️ Important limitations:</h4>
                    <ul class="list-disc list-inside space-y-2 text-gray-300 dark:text-gray-300 mb-4">
                        <li><strong>Earning vs. Holiday year:</strong> Money earned May 1st - April 30th can only be used the following May 1st - April 30th</li>
                        <li><strong>Employer coordination:</strong> Must be approved by your employer before taking paid holiday. Though, never had a case when we had to do so.</li>
                        <li><strong>Limited early withdrawal:</strong> Only in specific situations (unemployment, leaving Denmark, etc.), so you chill.</li>
                        <li><strong>Tax implications:</strong> Feriepenge is taxed when paid out, not when earned. Don't be surprised you got less when you receive it.</li>
                    </ul>

                    <div class="mt-4 p-3 bg-red-200 dark:bg-red-200 rounded-lg">
                        <p class="text-sm text-red-800 dark:text-red-800"><strong>Warning:</strong> If you're leaving Denmark permanently, make sure to claim your feriepenge before departure - the process can be complicated from abroad.</p>
                    </div>
                </div>
            </div>
        </div>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabLinks = document.querySelectorAll('#feriepenge-tabs .tab-link');
            const tabContents = document.querySelectorAll('.tab-content');

            tabLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();

                    const targetTab = this.getAttribute('data-tab');

                    // Remove active classes from all tabs
                    tabLinks.forEach(tab => {
                        tab.classList.remove('text-white', 'bg-blue-600', 'dark:bg-blue-600', 'active');
                        tab.classList.add('rounded-lg', 'hover:text-white', 'bg-gray-800', 'hover:bg-gray-700', 'dark:bg-gray-800', 'dark:hover:bg-gray-700', 'dark:hover:text-white');
                        tab.removeAttribute('aria-current');
                    });

                    // Add active classes to clicked tab
                    this.classList.remove('rounded-lg', 'hover:text-white', 'bg-gray-800', 'hover:bg-gray-700', 'dark:bg-gray-800', 'dark:hover:bg-gray-700', 'dark:hover:text-white');
                    this.classList.add('text-white', 'bg-blue-600', 'dark:bg-blue-600', 'active');
                    this.setAttribute('aria-current', 'page');

                    // Hide all tab contents
                    tabContents.forEach(content => {
                        content.classList.add('hidden');
                    });

                    // Show target tab content
                    const targetContent = document.getElementById(targetTab);
                    if (targetContent) {
                        targetContent.classList.remove('hidden');
                    }
                });
            });
        });
        </script>
    </div>

    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="job-recommendation">
        <h3 class="text-2xl font-bold mb-3 text-neutral-800 dark:text-neutral-900">What job sites do we <mark class="px-2 text-white bg-blue-600 rounded-sm dark:bg-blue-500">recommend?</mark></h3>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed pb-8">It varies from person to person but we will drop some names which enable you to make the most money.</p>


        <h2 class="text-2xl font-bold mb-3 mt-4 text-neutral-800 dark:text-neutral-900">REMA 1000 Warehouse</h2>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mb-4">Rema 1000 is a supermarket chain in Denmark. They have a warehouse in Horsens and they are always looking for new workers. The work is hard but the pay is good.</p>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mb-4">You can apply for a job on their website or just go to the warehouse and ask for a job. <strong>Ask around your friends, one of them will have the contact info to the office.</strong></p>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mb-4">The work is hard but the pay is good. You can expect to earn around <strong>10000 - 16000 DKK</strong> per month, depending on how many hours you can farm in a month.</p>

        <h2 class="text-2xl font-bold mb-3 mt-4 text-neutral-800 dark:text-neutral-900">NORMAL Warehouse</h2>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mb-4">NORMAL is a all-around shop chain. They have warehouse in Hedensted (15-20 min from Horsens), so you would need to have a car.</p>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mb-4">You can apply for a job on their website or just go to the warehouse and ask for a job. <strong>Ask around your friends, one of them will have the contact info to the office.</strong></p>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mb-4">The work is hard and atmosphere might be unwelcoming but the pay is decent.</p>

        <h2 class="text-2xl font-bold mb-3 mt-4 text-neutral-800 dark:text-neutral-900">Your programme part-time job</h2>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mb-4"><strong>This is the best and hardest option to get. </strong> If you are lucky, you will get a part-time job related to your programme field. It is usually around 10-20 hours per week and the pay varies. But hey, you are gaining experience. </p>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mb-4">You can expect to earn around <strong>5000 - 12000 DKK</strong> per month.</p>
    </div>

    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="internship">
        <h3 class="text-2xl font-bold mb-3 text-neutral-800 dark:text-neutral-900">What about <mark class="px-2 text-white bg-orange-500 rounded-sm dark:bg-orange-500">internship</mark>?</h3>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed pb-8">Internship is a great way to gain experience and make connections in your field. It is usually unpaid but it can lead to a full-time job.</p>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mb-4">You can find internship opportunities on your programme's website or by asking your teachers. You can also find internship opportunities on job sites like Jobindex, Indeed, and LinkedIn. At VIA we have mandatory internship at 5th semester.</p>
        <p class="text-gray-600 dark:text-neutral-900 leading-relaxed mb-4 font-bold">Internship is 70% connections/networking, 10% skill and 20% luck. But don't worry, you will find it...</p>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mb-4">Internship is usually around 3-6 months long and you can expect to work around 35 hours per week. The pay varies but it is usually around <strong>3000 - 16500 DKK</strong> per month (before tax).</p>
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mb-4">Also, keep in mind that during internship you <strong>CANNOT receive SU</strong>, so you need to live on your salary or take up another part-time job on weekends.</p>

        <div class="flex items-center p-4 mb-2 text-sm text-red-800 border border-red-300 rounded-lg bg-red-100" role="alert">
            <svg class="flex-shrink-0 inline w-5 h-5 mr-3 text-red-700" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l6.518 11.59c.75 1.336-.213 3.011-1.742 3.011H3.481c-1.53 0-2.492-1.675-1.742-3.011l6.518-11.59zM11 14a1 1 0 10-2 0 1 1 0 002 0zm-1-2a1 1 0 01-1-1V8a1 1 0 112 0v3a1 1 0 01-1 1z" clip-rule="evenodd"></path>
            </svg>
            <span class="font-medium">Please be aware that the competition is <strong>HUGE</strong>, which means the earlier you start looking for it, the better. I'd say to start looking for it around January/February, so the end of your 4th semester.</span>
        </div>
    </div>
</x-inside-layout>
