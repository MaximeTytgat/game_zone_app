<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 mx-auto">
                    <div class="flex justify-between mt-5 mb-5">
                    </div>
                    <div class="flex justify-between mt-5 mb-5">
                        <div class="mx-4 w-96">Prénom:</div>
                        <div class="mx-4 w-96">Nom:</div>
                        <div class="mx-4 w-96">Username:</div>
                        <div class="mx-4 w-96">Email:</div>
                        <div class="mx-4 w-96">Experience:</div>
                        <div class="mx-4 w-96">Phone Number:</div>
                        <div class="mx-4 w-96">Address:</div>
                        <div class="mx-4 w-96">City:</div>
                        <div class="mx-4 w-96">Postal code:</div>
                        <div class="mx-4 w-96">Admin:</div>
                        <div class="flex">
                            <div class="py-2 px-4 mx-2 text-sm font-bold">Détails</div>
                            <div class="py-2 px-4 mx-2 text-sm font-bold">Supprimer</div>
                        </div>
                    </div>
                    @foreach ($users as $user)
                        <div class="flex justify-between mt-5 mb-5">
                            <div class="mx-4 w-96">
                                {{ \Illuminate\Support\Str::limit($user->first_name, 8, $end='...') }}
                            </div>
                            <div class="mx-4 w-96">
                                {{ \Illuminate\Support\Str::limit($user->last_name, 8, $end='...') }}
                            </div>
                            <div class="mx-4 w-96">
                                {{ \Illuminate\Support\Str::limit($user->username, 6, $end='...') }}
                            </div>
                            <div class="mx-4 w-96">
                                {{ \Illuminate\Support\Str::limit($user->email, 6, $end='...') }}
                            </div>
                            <div class="mx-4 w-96">
                                {{ \Illuminate\Support\Str::limit($user->experience, 6, $end='...') }}
                            </div>
                            <div class="mx-4 w-96">
                                {{ \Illuminate\Support\Str::limit($user->phone, 6, $end='...') }}
                            </div>
                            <div class="mx-4 w-96">
                                {{ \Illuminate\Support\Str::limit($user->address, 4, $end='...') }}
                            </div>
                            <div class="mx-4 w-96">
                                {{ \Illuminate\Support\Str::limit($user->city, 6, $end='...') }}
                            </div>
                            <div class="mx-4 w-96">
                                {{ \Illuminate\Support\Str::limit($user->zip_code, 6, $end='...') }}
                            </div>
                            <div class="mx-4 w-96">
                                {{ \Illuminate\Support\Str::limit($user->is_admin, 6, $end='...') }}
                            </div>
                            <div class="flex">
                                <a href="{{ route('User.show', ['User' => $user->id]) }} " class="rounded-md shadow_sm py-2 px-4 mx-2 text-sm font-bold bg-green-400 text-white hover:bg-green-500">
                                    <span class="fa fa-eye"> Détails</span>
                                </a>
                                <form action="{{ route('User.destroy', ['User' => $user->id]) }}" method="POST" class="rounded-md shadow_sm py-2 px-4 mx-2 text-sm font-bold bg-red-400 text-white hover:bg-red-500">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">
                                        <span class="fa fa-trash"> Supprimer</span>
                                    </button>
                                </form>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>




</x-app-layout>


