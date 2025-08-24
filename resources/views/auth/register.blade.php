<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/register">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <h2 class="text-base/7 font-semibold text-white">Register a new User</h2>
                <p class="mt-1 text-sm/6 text-gray-400">We just need a handful of details from you.</p>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    
                    {{-- name --}}
                    <x-form-field>
                        <x-form-label for="name">Name</x-form-label>
                        <div class="mt-2">
                            <x-form-imput required type="text" name="name" id="name"></x-form-imput>

                            <x-form-error name="name" />
                        </div>
                    </x-form-field>

                    {{-- email --}}
                    <x-form-field>
                        <x-form-label for="email">E-mail</x-form-label>
                        <div class="mt-2">
                            <x-form-imput required type="email" name="email" id="email"></x-form-imput>

                            <x-form-error name="email" />
                        </div>
                    </x-form-field>

                    {{-- password --}}
                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-imput required type="password" name="password" id="password"></x-form-imput>

                            <x-form-error name="password" />
                        </div>
                    </x-form-field>

                    {{-- confirm password --}}
                    <x-form-field>
                        <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                        <div class="mt-2">
                            <x-form-imput required type="password" name="password_confirmation"
                                id="password_confirmation"></x-form-imput>

                            <x-form-error name="password_confirmation" />
                        </div>
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
            <a href="/" class="text-sm/5/6 font-semibold text-white">Cancel</a>
            <x-form-button>Register</x-form-button>
        </div>
    </form>

</x-layout>
