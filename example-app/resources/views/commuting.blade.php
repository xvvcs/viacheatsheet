<x-inside-layout :sections="[
    ['id' => 'buses', 'label' => 'Buses'],
    ['id' => 'trains', 'label' => 'Trains']
]">
    <x-slot:heading>Commuting</x-slot:heading>

    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100">
        <h2 class="text-2xl font-bold mb-3 text-neutral-800 dark:text-neutral-900">Buses</h2>
    </div>
</x-inside-layout>
