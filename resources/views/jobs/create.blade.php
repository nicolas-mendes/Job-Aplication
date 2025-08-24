<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <h2 class="text-base/7 font-semibold text-white">Create a New Job</h2>
                <p class="mt-1 text-sm/6 text-gray-400">We just need a handful of details from you.</p>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    {{-- title --}}
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">                            
                            <x-form-imput 
                            required 
                            type="text" 
                            name="title" 
                            id="title" 
                            placeholder="Developer"
                            ></x-form-imput>
                            
                            <x-form-error name="title" />
                        </div>
                    </x-form-field>

                    {{-- salary --}}
                    <x-form-field>
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">                            
                            <x-form-imput 
                            required 
                            type="number" 
                            name="salary" 
                            id="salary" 
                            placeholder="U$ 1 000.00"
                            min="0"
                            step="0.01"
                            ></x-form-imput>
                            
                            <x-form-error name="title" />
                        </div>
                    </x-form-field>

                    {{-- description --}}
                    <x-form-field>
                        <x-form-label for="description">Description</x-form-label>
                        
                        <div class="mt-2">
                            <textarea id="description" name="description" rows="3"
                                class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"></textarea>
                            
                            <x-form-error name="description" />
                        </div>
                        
                        <p class="mt-3 text-sm/6 text-gray-400">Write a few sentences description about the job.</p>

                    </x-form-field>

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
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/5/6 font-semibold text-white">Cancel</button>
            <x-form-button>Save</x-form-button>
        </div>
    </form>

</x-layout>
