<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 mx-auto">
                    <div class="flex justify-between mt-5 mb-5">
                        <a href="{{ route('Attraction.create') }} " class="rounded-md shadow_sm py-2 px-4 mx-2 text-sm font-bold bg-green-400 text-white hover:bg-green-500">
                            <span class="fa fa-eye">Ajouter une attraction</span>
                        </a>
                    </div>
                    <div class="flex justify-between mt-5 mb-5">
                        <div class="mx-4 w-96">Name:</div>
                        <div class="mx-4 w-96">Size Required</div>
                        <div class="mx-4 w-96">Experience Earn</div>
                        <div class="mx-4 w-96">Picture</div>
                        <div class="mx-4 w-96">Picture alt</div>
                        <div class="mx-4 w-96">Description</div>
                        <div class="flex">
                            <div class="py-2 px-4 mx-2 text-sm font-bold">Details</div>
                            <div class="py-2 px-4 mx-2 text-sm font-bold">Modifier</div>
                            <div class="py-2 px-4 mx-2 text-sm font-bold">Supprimer</div>
                        </div>
                    </div>
                @foreach ($attractions as $attraction)
                        <div class="flex justify-between mt-5 mb-5">
                            <div class="mx-4 w-96">
                                {{ \Illuminate\Support\Str::limit($attraction->name, 10, $end='...') }}
                            </div>
                            <div class="mx-4 w-96">
                                {{ $attraction->size_required }}
                            </div>
                            <div class="mx-4 w-96">
                                {{ $attraction->experience_earn }}
                            </div>
                            <div class="mx-4 w-96">
                                {{ \Illuminate\Support\Str::limit($attraction->picture, 10, $end='...') }}
                            </div>
                            <div class="mx-4 w-96">
                                {{ \Illuminate\Support\Str::limit($attraction->picture_alt, 10, $end='...') }}
                            </div>
                            <div class="mx-4 w-96">
                                {{ \Illuminate\Support\Str::limit($attraction->description, 10, $end='...') }}
                            </div>
                            <div class="flex">
                                <a href="{{ route('Attraction.show', ['Attraction' => $attraction->id]) }} " class="rounded-md shadow_sm py-2 px-4 mx-2 text-sm font-bold bg-green-400 text-white hover:bg-green-500">
                                    <span class="fa fa-eye"> Détails</span>
                                </a>
                                <a href="{{ route('Attraction.edit', ['Attraction' => $attraction->id]) }}" class="rounded-md shadow_sm py-2 px-4 mx-2 text-sm font-bold bg-green-400 text-white hover:bg-green-500">
                                    <span class="fa fa-edit"> Modifier</span>
                                </a>
                                        <form action="{{ route('Attraction.destroy', ['Attraction' => $attraction->id]) }}" method="POST" class="rounded-md shadow_sm py-2 px-4 mx-2 text-sm font-bold bg-red-400 text-white hover:bg-red-500">
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


