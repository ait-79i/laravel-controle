<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- fName -->
        <div>
            <x-input-label for="fname" :value="__('First Name')" />
            <x-text-input id="fname" class="block mt-1 w-full" type="text" name="fname" :value="old('fname')" required
                autofocus autocomplete="fname" />
            <x-input-error :messages="$errors->get('fname')" class="mt-2" />
        </div>
        <!-- LName -->
        <div>
            <x-input-label for="lname" :value="__('Last name')" />
            <x-text-input id="lname" class="block mt-1 w-full" type="text" name="lname" :value="old('lname')"
                required autofocus autocomplete="lname" />
            <x-input-error :messages="$errors->get('lname')" class="mt-2" />
        </div>
        <!-- poste -->
        <div>
            <x-input-label for="poste" :value="__('Poste')" />
            <x-text-input id="poste" class="block mt-1 w-full" type="text" name="poste" :value="old('poste')"
                required autofocus autocomplete="poste" />
            <x-input-error :messages="$errors->get('poste')" class="mt-2" />
        </div>
        <!-- salaire -->
        <div>
            <x-input-label for="salaire" :value="__('Salaire')" />
            <x-text-input id="salaire" class="block mt-1 w-full" type="text" name="salaire" :value="old('salaire')"
                required autofocus autocomplete="salaire" />
            <x-input-error :messages="$errors->get('salaire')" class="mt-2" />
        </div>

        <!--  Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
