<x-inside-layout :sections="[
    ['id' => 'banks', 'label' => 'Banks'],
    ['id' => 'Lunar', 'label' => 'Lunar Bank'],
    ['id' => 'payment-types', 'label' => 'Payment Types'],
    ['id' => 'Klarna', 'label' => 'Klarna'],
    ['id' => 'MobilePay', 'label' => 'MobilePay'],
]">
    <x-slot:heading>Banking</x-slot:heading>

    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="banks">


        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-2xl dark:text-black">Which <span class="text-blue-600 dark:text-blue-500">bank</span> should you choose?</h1>
        <p class="text-lg font-normal text-gray-500 lg:text-lg dark:text-gray-600">This is pretty straightforward. There is many to choose from but there are three we recommend:</p>

        <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-black">Mostly used by students:</h2>
        <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-600 mb-3">
            <li>
                Lunar Bank - <a href="https://www.lunar.app/dk/da/" class="text-blue-600 dark:text-blue-500 hover:underline">Check Lunar here</a>
            </li>
            <li>
                Danske Bank - <a href="https://www.danskebank.dk/" class="text-blue-600 dark:text-blue-500 hover:underline">Check Danske Bank here</a>
            </li>
            <li>
                Nykredit - <a href="https://www.nykredit.dk/" class="text-blue-600 dark:text-blue-500 hover:underline">Check Nykredit here</a>
            </li>
        </ul>

        <p class="text-lg font-normal text-gray-500 lg:text-lg dark:text-gray-600">But there can be only one king...</p>
    </div>
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="Lunar">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-2xl dark:text-black">Why <span class="text-blue-600 dark:text-green-500">Lunar</span> is the best option?</h1>
        <p class="text-lg font-normal text-gray-500 lg:text-lg dark:text-gray-600">Basically, selecting Lunar as a first bank is a no-brainer, really.</p>

        <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-black">Its key points:</h2>
        <ul class="space-y-1 text-gray-500 list-disc list-inside dark:text-gray-600 mb-3">
            <li>
                <span class="font-semibold text-gray-900 underline dark:text-black decoration-indigo-500">It's FREE.</span> The standard account costs nothing per month. You get an account, a card, and a great app without paying any annoying fees, which is perfect when you're on a student budget.
            </li>
            <li>
                <span class="font-semibold text-gray-900 underline dark:text-black decoration-indigo-500">Super fast setup.</span> You can create your account directly from your phone in just a few minutes. No need to book a meeting at a physical bank – <span class="font-semibold text-gray-900 underline dark:text-black decoration-indigo-500">just use your MitID and you're good to go.</span>
            </li>
            <li>
                <span class="font-semibold text-gray-900 underline dark:text-black decoration-indigo-500">It’s a real bank account.</span> You can get your salary from your part-time job or your SU paid directly into your Lunar account. It works perfectly as your NemKonto (account linked to receiving salary etc.).
            </li>

        </ul>
        <span class="text-lg font-semibold text-gray-500 lg:text-lg dark:text-gray-900">So yeah, it's free, completely digital, and does everything you need in an instant. (it's not sponsored don't worry)</span>

        <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-black pt-2">Its downsides:</h2>
        <ul class="space-y-1 text-gray-500 list-disc list-inside dark:text-gray-600 mb-3">
            <li>
                <span class="font-semibold text-gray-900 underline dark:text-black decoration-red-500">Low (or no) interest on savings.</span> On the free "Light" plan, you won't be earning much, if anything, on the money in your account. Other banks might offer a better interest rate.
            </li>
            <li>
                <span class="font-semibold text-gray-900 underline dark:text-black decoration-red-500">100% online so no physical credit card.</span> You get a digital card for free, which is fine for online shopping and paying with your phone (Apple/Google Pay). But if you want a plastic card to keep in your wallet, you have to pay a one-time delivery fee for it (around 59 DKK)
            </li>
            <li>
                <span class="font-semibold text-gray-900 underline dark:text-black decoration-red-500">Fees for cash withdrawals. </span>Need to pull out cash from an ATM? With the free plan, it'll cost you.
            </li>
            <li>
                <span class="font-semibold text-gray-900 underline dark:text-black decoration-red-500"> There's a daily and monthly cap </span> on how much cash you can withdraw and how much you can spend on the card. For day-to-day student life, it's probably fine, but for a big purchase like a new laptop or a flight ticket, you might hit the limit. Can be changed in the app tho
            </li>
        </ul>

        <span class="text-lg font-semibold text-gray-500 lg:text-lg dark:text-gray-900">It is an app available on both Android and IOS. You can set it up and receive salary on it.</span>
    </div>

    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="payment-types">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-2xl dark:text-black">Payment <span class="text-blue-600 dark:text-blue-500">types</span> in Denmark</h1>
        <p class="text-lg font-normal text-gray-500 lg:text-lg dark:text-gray-600">In Denmark, you can pay for almost everything with your phone. But there are some payment types that are more common than others.</p>

        <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-black">Most common payment types:</h2>
        <ul class="space-y-1 text-gray-500 list-disc list-inside dark:text-gray-600 mb-3">
            <li>
                <span class="font-semibold text-gray-900 underline dark:text-black decoration-indigo-500">MobilePay</span> - A true ruler. The most popular payment app in Denmark. You can use it to pay for almost anything, from groceries to rent. You just need a mobile number and a bank account to get started. It's super easy to use, and you can even send money to people who don't have the app.
            </li>
            <li>
                <span class="font-semibold text-gray-900 underline dark:text-black decoration-indigo-500">Dankort</span> - The Danish debit card. It's accepted almost everywhere and you can use it to withdraw cash from ATMs.
            </li>
            <li>
                <span class="font-semibold text-gray-900 underline dark:text-black decoration-indigo-500">Credit cards</span> - Visa and Mastercard are the most common credit cards in Denmark. They're accepted almost everywhere, but you might need to pay a fee for using them.
            </li>
        </ul>

        <p class="text-lg font-semibold text-gray-500 lg:text-lg dark:text-gray-900">So in short, you can pay for almost everything with your phone. I don't even have physical credit card and never felt like I will ever need it.</p>
    </div>

    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="Klarna">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-2xl dark:text-purple-800">Klarna</h1>
        <p class="text-lg font-normal text-gray-500 lg:text-lg dark:text-gray-600">Klarna is a payment service that allows you to buy now and pay later. Total consumptionism final boss. It's available in many online stores, and it's super easy to use.</p>

        <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-black">How it works:</h2>
        <ul class="space-y-1 text-gray-500 list-disc list-inside dark:text-gray-600 mb-3">
            <li>
                You can choose to pay for your purchase in full or in installments.
            </li>
            <li>
                If you choose to pay in installments, you can select the number of months you want to pay over.
            </li>
            <li>
                Klarna will then send you a bill for the amount due each month.
            </li>
        </ul>

        <p class="text-lg font-semibold text-gray-500 lg:text-lg dark:text-gray-900">It's a great way to spread out the cost of a big purchase, and it's available in many online stores. I know its not Denmark exclusive, but many people don't have it in ther countries.</p>
    </div>

    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="MobilePay">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-2xl dark:text-black">All about<span class="text-blue-600 dark:text-blue-500"> Mobilepay</span></h1>
        <p class="text-lg font-normal text-gray-500 lg:text-lg dark:text-gray-600">MobilePay is a mobile payment app that allows you to send and receive money instantly. It's super easy to use, and it's available for both Android and iOS.</p>

        <p class="text-lg font-semibold text-gray-500 lg:text-lg dark:text-gray-900 mb-4">Honestly, you pretty much need this app to live in Denmark. Think of it as your phone's magic wallet. It's what everyone uses to:</p>

        <ul class="space-y-1 text-gray-500 list-disc list-inside dark:text-gray-600 mb-3">
            <li>
                <span class="font-semibold text-gray-900 underline dark:text-black decoration-indigo-500">Split a bill:</span> Pay your friend back for pizza or beers instantly.
            </li>
            <li>
                <span class="font-semibold text-gray-900 underline dark:text-black decoration-indigo-500">Pay in stores:</span> Buy coffee, groceries, or stuff at a flea market just by swiping on your phone.
            </li>
            <li>
                <span class="font-semibold text-gray-900 underline dark:text-black decoration-indigo-500">Shop online:</span> It's often the easiest checkout option online.
            </li>
        </ul>

        <p class="text-lg font-normal text-gray-500 lg:text-lg dark:text-gray-600 mb-4">You just link it to your bank card, and then you can send money to anyone using just their phone number. Super simple, no more messing around with cash or long account numbers.</p>

        <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-black">How to get it (The simple checklist)</h2>
        <p class="text-lg font-normal text-gray-500 lg:text-lg dark:text-gray-600 mb-3">Getting set up is quick, but you need the right stuff. Here's all you need:</p>

        <ul class=" space-y-1 text-gray-500 list-inside dark:text-gray-400">
            <li class="flex items-center">
                <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="font-semibold text-gray-900 dark:text-black pr-2">Your phone, obviously:</span> An iPhone or Android that can download the app.
            </li>
            <li class="flex items-center">
                <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="font-semibold text-gray-900 dark:text-black pr-2">A Danish phone number:</span>  This is like your MobilePay username; it's how friends find you.
            </li>
            <li class="flex items-center">
                <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="font-semibold text-gray-900 dark:text-black pr-2">Your CPR number & MitID:</span>  This is the boring but important part. They use it to confirm you're actually you and keep things secure. You can't get it without these.
            </li>
            <li class="flex items-center">
                <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="font-semibold text-gray-900 dark:text-black pr-2">A Danish bank account & card:</span> The app needs to connect to your card (like a Visa or Mastercard) to send and receive money.
            </li>
            <li class="flex items-center">
                <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="font-semibold text-gray-900 dark:text-black pr-2">Be at least 13 years old.</span>
            </li>
        </ul>

        <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-black pt-6">How it works:</h2>
        <ul class="space-y-1 text-gray-500 list-disc list-inside dark:text-gray-600 mb-3">
            <li>
                You can link your bank account or credit card to the app.
            </li>
            <li>
                You can send money to anyone with a Danish phone number.
            </li>
            <li>
                You can also receive money from anyone with a Danish phone number.
            </li>
        </ul>

        <p class="text-lg font-semibold text-gray-500 lg:text-lg dark:text-gray-900">It's a great way to pay for things like rent, groceries, and bills. It's also super convenient for splitting the bill with friends.</p>
    </div>
</x-inside-layout>
