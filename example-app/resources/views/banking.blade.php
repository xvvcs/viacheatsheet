<x-inside-layout :sections="[
    ['id' => 'banks', 'label' => 'Banks'],
    ['id' => 'cards', 'label' => 'Credit Cards']
]">
    <x-slot:heading>Banking</x-slot:heading>

    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100">
        <h2 class="text-2xl font-bold mb-3 text-neutral-800 dark:text-neutral-900">Banks</h2>
    </div>
</x-inside-layout>
