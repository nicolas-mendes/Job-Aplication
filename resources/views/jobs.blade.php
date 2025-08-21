<x-layout>
    <x-slot:heading>
        Jobs Available
    </x-slot:heading> 

<ul>
    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{$job['id']}}" class="text-blue-300 hover:underline">
                <strong>{{$job['title']}}</strong>
            </a>
            <p>Salary: R${{$job['salary']}} <br> {{$job['description']}} </p>
        </li>
        <br>
    @endforeach
</ul>
    
</x-layout>