<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 w-2/3 mx-auto">
                    <div class="flex justify-between mt-5 mb-5"><span>Prénom:</span> <span class="w-2/3">{{ $user->first_name }}</span></div>
                    <div class="flex justify-between mt-5 mb-5"><span>Nom: </span> <span class="w-2/3">{{ $user->last_name }}</span></div>
                    <div class="flex justify-between mt-5 mb-5"><span>Username:</span> <span class="w-2/3">{{ $user->username }}</span></div>
                    <div class="flex justify-between mt-5 mb-5"><span>Email:</span> <span class="w-2/3">{{ $user->email }}</span></div>
                    <div class="flex justify-between mt-5 mb-5"><span>Experience:</span> <span class="w-2/3">{{ $user->experience }}</span></div>
                    <div class="flex justify-between mt-5 mb-5"><span>Phone Number:</span> <span class="w-2/3">{{ $user->phone }}</span></div>
                    <div class="flex justify-between mt-5 mb-5"><span>Address:</span> <span class="w-2/3">{{ $user->address }}</span></div>
                    <div class="flex justify-between mt-5 mb-5"><span>City:</span> <span class="w-2/3">{{ $user->city }}</span></div>
                    <div class="flex justify-between mt-5 mb-5"><span>Postal code:</span> <span class="w-2/3">{{ $user->zip_code }}</span></div>

                    <div class="flex justify-between mt-12">
                        <a href="{{ route('User.edit', ['User' => $user->id]) }}">
                            <button class="rounded-md shadow_sm py-2 px-4 text-sm font-bold bg-green-400 text-white hover:bg-green-500">Modifier mon compte</button>
                        </a>
                        <form action="{{ route('User.destroy', ['User' => $user->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="rounded-md shadow_sm py-2 px-4 text-sm font-bold bg-red-400 text-white hover:bg-red-500">Supprimer mon compte</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



