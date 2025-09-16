<x-layout>
    <x-page-heading>Search Result</x-page-heading>

    <div class="mt-6 space-y-6">
        @foreach ($jobs as $job)
            <x-job-card-wide :job="$job"></x-job-card>
        @endforeach
    </div>


</x-layout>