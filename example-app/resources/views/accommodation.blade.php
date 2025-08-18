<x-inside-layout :sections="[
    ['id' => 'accommodation', 'label' => 'Accommodation'],
    ['id' => 'furniture', 'label' => 'Furnitures']
]">
    <x-slot:heading>Accommodation</x-slot:heading>

    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100">
        <h2 class="text-2xl font-bold mb-3 text-neutral-800 dark:text-neutral-900">Accommodation</h2>
    </div>
</x-inside-layout>
