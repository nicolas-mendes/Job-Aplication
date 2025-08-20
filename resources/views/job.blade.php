<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>

    <h2>{{$job['title']}}</h2>
    <p>This Job Pays {{$job['salary']}} a month </p>
</x-layout>