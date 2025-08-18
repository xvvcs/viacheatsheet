<x-inside-layout :sections="[
    ['id' => 'buses', 'label' => 'Buses'],
    ['id' => 'trains', 'label' => 'Trains']
]">
    <x-slot:heading>Commuting</x-slot:heading>

<!-- Buses -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="buses">
        <h2 class="text-2xl font-bold mb-3 text-neutral-800 dark:text-neutral-900">Buses</h2>
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
</x-inside-layout>
