<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <h1>Jobs Available</h1>


<ul>
    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{$job['id']}} ">
                <strong>{{$job['title']}}</strong> <BR> Salary: R$ {{$job['salary']}}
            </a>
        </li>
        <br>
    @endforeach
</ul>
    
</x-layout>