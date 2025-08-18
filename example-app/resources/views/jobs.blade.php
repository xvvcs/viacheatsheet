<x-layout>
    <x-slot:heading>Job Listings</x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/{{$job['id']}}" class="text-blue-500 hover: underline-offset-1">
                <button class="bg-blue-300 border border-input hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50"><li><strong>{{ $job['title'] }}</strong></li></button>
            </a>
        @endforeach
    </ul>

</x-layout>
