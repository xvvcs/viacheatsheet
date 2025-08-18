<x-inside-layout :sections="[
    ['id' => 'sports', 'label' => 'Sports'],
    ['id' => 'fitness', 'label' => 'Fitness'],
    ['id' => 'club', 'label' => 'Clubbing']
]">
    <x-slot:heading>Sports</x-slot:heading>

    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100">
        <h2 class="text-2xl font-bold mb-3 text-neutral-800 dark:text-neutral-900">Sports</h2>
    </div>
</x-inside-layout>

