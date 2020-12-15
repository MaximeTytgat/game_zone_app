<x-app-layout>

    <div class="py-12">
        <div class="w-4/12 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 w-2/3 mx-auto">
                    <h2 class="text-center w-100">Ajouter un produit</h2>
                    <form action="{{ route('Attraction.store') }}" method="POST" class="col-sm-8 mx-auto" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-4 mb-4">
                            <x-label for="name">Nom de l'attraction:</x-label>
                            <x-input value="" name="name" id="name" type="text" tabindex="1" required autofocus></x-input>
                        </div>
                        <div class="mt-4 mb-4">
                            <x-label for="size_required">Taille requise (cm):</x-label>
                            <x-input value="" name="size_required" id="size_required" type="number" tabindex="1" required autofocus></x-input>
                        </div>
                        <div class="mt-4 mb-4">
                            <x-label for="description">Description de l'attraction:</x-label>
                            <x-input value="" name="description" id="description" type="text" tabindex="1" required autofocus></x-input>
                        </div>
                        <div class="mt-4 mb-4">
                            <x-label for="experience_earn">Expérience gagné avec l'attraction:</x-label>
                            <x-input value="" name="experience_earn" id="experience_earn" type="number" tabindex="1" required autofocus></x-input>
                        </div>
                        <div class="mt-4 mb-4">
                            <x-label for="picture">image de l'attraction:</x-label>
                            <x-input value="" name="picture" id="picture" type="file" tabindex="1" required autofocus></x-input>
                        </div>
                        <div class="mt-4 mb-4">
                            <x-label for="picture_alt">Description de l'image:</x-label>
                            <x-input value="" name="picture_alt" id="picture_alt" type="text" tabindex="1" required autofocus></x-input>
                        </div>

                        <button type="submit" id="contact-submit" class="rounded-md shadow_sm py-2 px-4 text-sm font-bold bg-green-400 text-white hover:bg-green-500">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
