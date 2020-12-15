<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 bg-white border-b border-gray-200">
                    <form action="{{ route('Attraction.update', ['Attraction'=>$attraction->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mt-4 mb-4">
                            <x-label for="name">Nom de l'attraction:</x-label>
                            <x-input value="{{ $attraction->name }}" name="name" id="name" type="text" tabindex="1" required autofocus></x-input>
                        </div>
                        <div class="mt-4 mb-4">
                            <x-label for="size_required">Taille requise (cm):</x-label>
                            <x-input value="{{ $attraction->size_required }}" name="size_required" id="size_required" type="number" tabindex="1" required autofocus></x-input>
                        </div>
                        <div class="mt-4 mb-4">
                            <x-label for="experience_earn">Expérience gagné avec l'attraction:</x-label>
                            <x-input value="{{ $attraction->experience_earn }}" name="experience_earn" id="experience_earn" type="number" tabindex="1" required autofocus></x-input>
                        </div>
                        <div class="mt-4 mb-4">
                            <x-label for="picture">image de l'attraction:</x-label>
                            <x-input value="" name="picture" id="picture" type="file" tabindex="1" autofocus></x-input>
                        </div>
                        <img src="{{ asset('storage/'.$attraction->picture.'') }}" style="max-width: 200px;">
                        <div class="mt-4 mb-4">
                            <x-label for="picture_alt">Description de l'image:</x-label>
                            <x-input value="{{ $attraction->picture_alt }}" name="picture_alt" id="picture_alt" type="text" tabindex="1" required autofocus></x-input>
                        </div>
                        <div class="mt-4 mb-4">
                            <x-label for="description">Description de l'attraction:</x-label>
                            <x-input value="{{ $attraction->description }}" name="description" id="description" type="text" tabindex="1" required autofocus></x-input>
                        </div>
                        <button type="submit" id="contact-submit" class="rounded-md shadow_sm py-2 px-4 text-sm font-bold bg-green-400 text-white hover:bg-green-500">Modifier mon compte</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


