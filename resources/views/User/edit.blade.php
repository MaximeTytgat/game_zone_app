<x-app-layout>
    <div class="py-12">
        <div class="max-w-xs mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 bg-white border-b border-gray-200">
                    <form action="{{ route('User.update', ['User'=>$user   ->id]) }}" method="POST" >
                        @csrf
                        @method('PUT')
                        <div class="mt-4 mb-4">
                            <x-label for="first_name">Prénom:</x-label>
                            <x-input value="{{ $user->first_name }}" name="first_name" id="first_name" type="text" tabindex="1" required autofocus></x-input>
                        </div>
                        <div class="mt-4 mb-4">
                            <x-label for="last_name">Nom:</x-label>
                            <x-input value="{{ $user->last_name }}" name="last_name" id="last_name" type="text" tabindex="1" required autofocus></x-input>
                        </div>
                        <div class="mt-4 mb-4">
                            <x-label for="username">Username:</x-label>
                            <x-input value="{{ $user->username }}" name="username" id="username" type="text" tabindex="1" required autofocus></x-input>
                        </div>
                        <div class="mt-4 mb-4">
                            <x-label for="email">Email:</x-label>
                            <x-input value="{{ $user->email }}" name="email" id="email" type="text" tabindex="1" required autofocus></x-input>
                        </div>
                        <div class="mt-4 mb-4">
                            <x-label for="phone">Phone Number:</x-label>
                            <x-input value="{{ $user->phone }}" name="phone" id="phone" type="text" tabindex="1" required autofocus></x-input>
                        </div>
                        <div class="mt-4 mb-4">
                            <x-label for="city">City:</x-label>
                            <x-input value="{{ $user->city }}" name="city" id="city" type="text" tabindex="1" required autofocus></x-input>
                        </div>
                        <div class="mt-4 mb-4">
                            <x-label for="address">Address:</x-label>
                            <x-input value="{{ $user->address }}" name="address" id="address" type="text" tabindex="1" required autofocus></x-input>
                        </div>
                        <div class="mt-4 mb-4">
                            <x-label for="zip_code">Postal code:</x-label>
                            <x-input value="{{ $user->zip_code }}" name="zip_code" id="zip_code" type="text" tabindex="1" required autofocus></x-input>
                        </div>

                        <div style="margin: 30px 0;">

                            <p>tu peux changer ton icone de profile !</p>

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

                        <button type="submit" id="contact-submit" class="rounded-md shadow_sm py-2 px-4 text-sm font-bold bg-green-400 text-white hover:bg-green-500">Modifier mon compte</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
