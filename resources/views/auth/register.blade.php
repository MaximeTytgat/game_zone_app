<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- First Name -->
            <div>
                <x-label for="first_name" :value="__('First Name')" />

                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus />
            </div>

            <!-- Last Name -->
            <div>
                <x-label for="last_name" :value="__('Last Name')" />

                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus />
            </div>

            <!-- Username -->
            <div>
                <x-label for="username" :value="__('Username')" />

                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
            </div>

                <!-- City -->
                <div>
                    <x-label for="city" :value="__('City')" />

                    <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required autofocus />
                </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <!-- icone de profile -->
            <div style="margin: 30px 0;">

                <p>Choisie une icone de profile !</p>

                <div style="display: flex; margin: 20px 0;">
                    <input type="radio" id="bird" name="profile_icon" value="profile_icon/gaming-bird.png" style="display: none">
                    <label for="bird">
                        <img style="width: 100%;" src="{{ asset('profile_icon/gaming-bird.png') }}" alt="icone de profile d'un oiseau">
                    </label>
                    <input type="radio" id="pirate" name="profile_icon" value="profile_icon/gaming-pirate.png" style="display: none">
                    <label for="pirate">
                        <img style="width: 100%;" src="{{ asset('profile_icon/gaming-pirate.png') }}" alt="icone de profile d'un pirate">
                    </label>
                    <input type="radio" id="wolf" name="profile_icon" value="profile_icon/gaming-wolf.png" style="display: none">
                    <label for="wolf">
                        <img style="width: 100%;" src="{{ asset('profile_icon/gaming-wolf.png') }}" alt="icone de profile d'un loup">
                    </label>
                    <input type="radio" id="snake" name="profile_icon" value="profile_icon/gaming-snake.png" style="display: none">
                    <label for="snake">
                        <img style="width: 100%;" src="{{ asset('profile_icon/gaming-snake.png') }}" alt="icone de profile d'un serpent">
                    </label>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
