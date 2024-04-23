<x-layout>
    <x-slot:heading>Jobs Listing</x-slot:heading>



    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{$job['id']}}" class="text-blue-400">

                    {{ $job['title'] }} : Pays {{ $job['salary'] }}
            </li>
            </a>
        @endforeach
    </ul>
</x-layout>
