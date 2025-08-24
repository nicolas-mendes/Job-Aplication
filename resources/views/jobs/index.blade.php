<x-layout>
    <x-slot:heading>
        Jobs Available
    </x-slot:heading> 

<div class="space-y-4">
    @foreach ($jobs as $job)
            <a href="/jobs/{{$job['id']}}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <strong>{{$job['title']}}</strong> <br>
                Company: <strong>{{$job->employer->name}}</strong> <br>
                Salary: <strong>U$ {{number_format($job['salary'],2,'.',' ')}} </strong> <br> 
                {{$job['description']}}
            </a>
    @endforeach
        <div>
            {{$jobs->links()}}
        </div>
</div>
    
</x-layout>