<x-guest-layout>
    <div>
        
        <div>
            <img src="" alt="">
        </div>
        <div>
            
            <div class="flex flex-col space-y-6 mt-6 justify-center items-center mb-32">
                <div class="flex flex-col justify-center items-center">
                    <div class=" border-2 border-indigo-500 flex flex-col items-center rounded-[20px] w-[700px] max-w-[95%] mx-auto bg-white  shadow-3xl shadow-shadow-500  p-3">
                        <div class="mt-2 mb-8 w-full">
                            <h4 class="px-2 text-xl font-bold text-navy-700">
                            Information sur l'annonce
                            </h4>
                            <div class="mt-8">
                                <img src="{{ asset('storage/postImage/' . $detailsPost->images[0]->imageUrl) }}" class="w-full h-[300px]" alt="">
                            </div>
                            <h4 class="text-lg font-bold ml-2 mt-3">Description</h4>
                            <p class="mt-2 px-2 text-base text-gray-600">
                            {{ $detailsPost->description_post }}
                            </p>
                        </div> 
                        <div class="grid grid-cols-2 gap-4 px-2 w-full">
                            <div class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                            <p class="text-sm text-gray-600">Commune</p>
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                               {{ $detailsPost->commune->libelle }}
                            </p>
                            </div>
        
                            <div class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                            <p class="text-sm text-gray-600">Loyer</p>
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                {{ $detailsPost->rent }} fcfa
                            </p>
                            </div>
        
                            <div class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                            <p class="text-sm text-gray-600">Caution</p>
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                {{ $detailsPost->security_deposit }}
                            </p>
                            </div>
        
                            <div class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                            <p class="text-sm text-gray-600">Genre shouhaité</p>
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                {{ $detailsPost->roommate_gender == 1 ? 'Masculin' : 'Feminin' }}
                            </p>
                            </div>
        
                            <div class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                            <p class="text-sm text-gray-600">Est meublé</p>
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                {{ $detailsPost->is_furnished ? 'Oui' : 'Non' }}
                            </p>
                            </div>
        
                            <div class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                            <p class="text-sm text-gray-600">Type d'appartement</p>
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                {{ $detailsPost->housing_type_id ? 'Imeuble' : 'Cour commune' }}
                            </p>
                            </div>
                        </div>
                    </div>           
                </div>
                <div class="flex flex-col justify-center items-center">
                    <div class=" border-2 border-indigo-500 flex flex-col items-center rounded-[20px] w-[700px] max-w-[95%] mx-auto bg-white  shadow-3xl shadow-shadow-500  p-3">
                        <div class="mt-2 mb-8 w-full">
                            <h4 class="px-2 text-xl font-bold text-navy-700 dark:text-white">
                            Information sur l'annonceur
                            </h4>
                            <p class="mt-2 px-2 text-base text-gray-600">
                            {{ $detailsPost->user->description }}
                            </p>
                        </div> 
                        <div class="grid grid-cols-2 gap-4 px-2 w-full">
                            <div class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                            <p class="text-sm text-gray-600">Nom</p>
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                               {{ $detailsPost->user->firstname }}
                            </p>
                            </div>
        
                            <div class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                            <p class="text-sm text-gray-600">Prenom</p>
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                {{ $detailsPost->user->lastname }}
                            </p>
                            </div>
        
                            <div class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                            <p class="text-sm text-gray-600">Numero telephone</p>
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                {{ $detailsPost->user->phone_number }}
                            </p>
                            </div>
        
                            <div class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                            <p class="text-sm text-gray-600">Genre</p>
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                {{ $detailsPost->user->gender ? 'Masculin' : 'Feminin' }}
                            </p>
                            </div>
        
                            <div class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                            <p class="text-sm text-gray-600">Email</p>
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                {{ $detailsPost->user->login }}
                            </p>
                            </div>
        
                            <div class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                            <p class="text-sm text-gray-600">Date d'anniversaire</p>
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                               {{ $detailsPost->user->dateOfBirth }}
                            </p>
                            </div>
                        </div>
                    </div>           
                </div>

            </div>
        </div>
    </div>
</x-guest-layout>