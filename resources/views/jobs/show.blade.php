<?php 
?>
<x-layout>
    <x-slot:heading>
        {{$job['title']}}
    </x-slot:heading>
    <h1 class="mb-3 text-xl"><strong>Company:</strong> {{$job->employer->name}}</h1>
    <h1 class="mb-3 text-lg"><strong>Salary:</strong> U$ {{ number_format($job['salary'], 2,'.',' ') }} </h1>
    <h1 class="mb-3 text-lg"><strong>Description of the job:</strong> </h1>
    <p>{{$job['description']}}</p>

    @can('edit',$job)
    <p class="mt-6">
        <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>
    </p>
    @endcan
</x-layout>