<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 w-2/3 mx-auto">
                    <img class="mx-auto w-20" src="{{ asset($Attraction->profile_icon) }}" alt="">
                    <div class="flex justify-between mt-5 mb-5"><span>Nom de l'attraction:</span> <span class="w-2/3">{{ $Attraction->name }}</span></div>
                    <div class="flex justify-between mt-5 mb-5"><span>Taille requise (cm): </span> <span class="w-2/3">{{ $Attraction->size_required }}</span></div>
                    <div class="flex justify-between mt-5 mb-5"><span>Expérience gagné avec l'attraction:</span> <span class="w-2/3">{{ $Attraction->experience_earn }}</span></div>
                    <div class="flex justify-between mt-5 mb-5"><span>image (url) de l'attraction:</span> <span class="w-2/3">{{ $Attraction->picture }}</span></div>
                    <img src="{{ asset('storage/'.$Attraction->picture.'') }}" style="max-width: 200px;">
                    <div class="flex justify-between mt-5 mb-5"><span>Description de l'image:</span> <span class="w-2/3">{{ $Attraction->picture_alt }}</span></div>
                    <div class="flex justify-between mt-5 mb-5"><span>Description de l'attraction:</span> <span class="w-2/3">{{ $Attraction->description }}</span></div>

                    <div class="flex justify-between mt-12">
                        <a href="{{ route('Attraction.edit', ['Attraction' => $Attraction->id]) }}">
                            <button class="rounded-md shadow_sm py-2 px-4 text-sm font-bold bg-green-400 text-white hover:bg-green-500">Modifier mon compte</button>
                        </a>
                        <form action="{{ route('Attraction.destroy', ['Attraction' => $Attraction->id]) }}" method="POST">
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



