<x-inside-layout :sections="[
    ['id' => 'work', 'label' => 'How to find a job?'],
    ['id' => 'earnings', 'label' => 'Estimated earnings'],
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
        <p class="text-gray-600 dark:text-neutral-700 leading-relaxed mb-4">Internship is usually around 3-6 months long and you can expect to work around 35 hours per week. The pay varies but it is usually around <strong>3000 - 8000 DKK</strong> per month.</p>

        <div class="flex items-center p-4 mb-2 text-sm text-red-800 border border-red-300 rounded-lg bg-red-100" role="alert">
            <svg class="flex-shrink-0 inline w-5 h-5 mr-3 text-red-700" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l6.518 11.59c.75 1.336-.213 3.011-1.742 3.011H3.481c-1.53 0-2.492-1.675-1.742-3.011l6.518-11.59zM11 14a1 1 0 10-2 0 1 1 0 002 0zm-1-2a1 1 0 01-1-1V8a1 1 0 112 0v3a1 1 0 01-1 1z" clip-rule="evenodd"></path>
            </svg>
            <span class="font-medium">Please be aware that the competition is <strong>HUGE</strong>, which means the earlier you start looking for it, the better. I'd say to start looking for it around January/February, so the end of your 4th semester.</span>
        </div>
    </div>
</x-inside-layout>
