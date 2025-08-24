<x-layout>
    <x-slot:heading>
        Log In
    </x-slot:heading>

    <form method="POST" action="/login">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <h2 class="text-base/7 font-semibold text-white">Login into your Account</h2>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    
                    {{-- email --}}
                    <x-form-field>
                        <x-form-label for="email">E-mail</x-form-label>
                        <div class="mt-2">
                            <x-form-imput required type="email" name="email" id="email" :value="old('email')"></x-form-imput>

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

            </div>
        </div>

        {{-- submit --}}
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm/5/6 font-semibold text-white">Cancel</a>
            <x-form-button>Log In</x-form-button>
        </div>
    </form>

</x-layout>
