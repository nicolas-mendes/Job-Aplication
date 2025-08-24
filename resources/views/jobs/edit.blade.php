<x-layout>
    <x-slot:heading>
        Edit Job: {{$job->title}}
    </x-slot:heading>

    <form method="POST" action="/jobs/{{$job->id}}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">

                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    {{-- title --}}
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-white">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                                
                                <input
                                value="{{$job->title}}" 
                                required 
                                id="title" 
                                type="text"
                                name="title" 
                                placeholder="Developer"
                                class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" />

                            </div>
                            @error('title')
                                <p class="text-sm/5 text-red-500 font-semibold mt-2">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- salary --}}
                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm/6 font-medium text-white">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                               
                                <input
                                value="{{$job->salary}}" 
                                required 
                                type="number" 
                                name="salary" 
                                id="salary" 
                                placeholder="U$ 1 000.00"
                                min="0" 
                                step="0.01"
                                class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6">

                            </div>
                            @error('salary')
                                <p class="text-sm/5 text-red-500 font-semibold mt-2">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- description --}}
                    <div class="col-span-full">
                        <label for="description" class="block text-sm/6 font-medium text-white">Description</label>
                        <div class="mt-2">

                            <textarea
                            id="description" 
                            name="description" 
                            rows="3"
                            class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">{{$job->description}}</textarea>

                            @error('description')
                                <p class="text-sm/5 text-red-500 font-semibold mt-2">{{$message}}</p>
                            @enderror

                        </div>
                        <p class="mt-3 text-sm/6 text-gray-400">Write a few sentences description about the job.</p>
                    </div>
                </div>

                {{-- general error message --}}
                {{-- <div class="mt-5">
                    @if ($errors->any())
                        <ul class="text-red-500 italic">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div> --}}

            </div>
        </div>

        {{-- submit --}}
        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <button form="delete-form" class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500">Delete</button>
            </div>
            <div class="flex items-center gap-x-6">
                <a href="/jobs/{{$job->id}}" button" class="text-sm/5/6 font-semibold text-white">Cancel</a>
                
                <div><button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Update</button></div>    
            </div>
        </div>
    </form>


    <form action="/jobs/{{$job->id}}" method="post" class="hidden" id="delete-form">
        @csrf
        @method('DELETE')


    </form>
</x-layout>
