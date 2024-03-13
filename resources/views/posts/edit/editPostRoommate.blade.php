<x-app-layout>
    
    <div class="m-[20px]">
        <h1 class="font-bold text-center text-3xl text-indigo-500">Remplissez le formulaire pour votre recherche de colocation</h1>
        <form action="{{ route('update.post.roommate') }}" method="POST" enctype="multipart/form-data" class="flex justify-center px-32 md:px-0 items-center mt-10 flex-col space-y-4">
            <div class="flex items-center space-y-6 md:space-y-0 flex-col md:flex-row md:space-x-36">
                <div class="flex flex-col space-y-1 "> 
                    <label for="commune">Commune de l'appartement(*)</label>
                    <select name="commune" class="w-[230px] rounded-md" id="commune">
                        @foreach ($communes as $commune)  
                            <option {{ $commune->id == $post->commune_id ? 'selected' : '' }} value="{{ $commune->id }}">{{ $commune->libelle }}</option>
                        @endforeach
                        
                    </select>
                </div>
                <div class="flex space-x-2 items-center">
                   
                    <label for="is_furnished" class="relative text-xl text-gray-500 flex mt-6 cursor-pointer items-center rounded-full p-3" data-ripple-dark="true"
                    >Est meublé</label>
                    <input
                        type="checkbox"
                        class="before:content[''] mt-6 peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-indigo-300 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-indigo-600 before:opacity-0 before:transition-opacity checked:border-indigo-500 checked:bg-indigo-500 checked:before:bg-indigo-500 hover:before:opacity-10"
                        id="is_furnished"
                        name="is_furnished"
                        {{ $post->is_furnished ? 'checked' : '' }}
                    />
            
                </div>
                
            </div>
            <div  class="flex flex-col space-y-6 md:space-y-0  md:flex-row md:space-x-16">
                <div class="flex flex-col space-y-1 items-start">
                    <label for="security_deposit">Caution</label>
                    <input  type="number" name="security_deposit" id="security_deposit"  class="w-[230px] rounded-md " value="{{ $post->security_deposit }}">
                </div>
                <div class="flex flex-col space-y-1 items-start">
                    <label for="rent">Loyer(*)</label>
                    <input class="rounded-md w-[230px]" type="number" name='rent' id="rent" value="{{ $post->rent }}">
                </div>
            </div> 
            <div class="flex space-y-6 md:space-y-0 flex-col md:flex-row md:space-x-16">

                <div class="flex  flex-col space-y-1 "> 
                    <label for="roommate_gender">Type de logement proposé(*)</label>
                    <select name="housing_type" class="w-[230px] rounded-md" id="housing_type">
                        @foreach ($housing_types as $housing_type)
                            <option {{ $housing_type->id == $post->housing_type_id ? 'selected' : '' }} value="{{ $housing_type->id }}">{{ $housing_type->libelle }}</option>    
                        @endforeach
                        
                    </select>
                </div>
                <div class="flex flex-col space-y-1 "> 
                    <label for="roommate_gender">Genre du colocataire(*)</label>
                    <select name="roommate_gender" class="w-[230px] rounded-md" id="roommate_gender">
                        @foreach ($genders as $gender)
                            <option {{ $post->roommate_gender == $gender->id ? 'selected' : '' }}  value="{{ $gender->id }}">{{ $gender->libelle }}</option>        
                        @endforeach
                        
                    </select>
                </div>
            </div>
            <div class="flex space-x-3 ">
                <label class="text-lg">Image d'appartment: </label>
                <input type="file" name="image" id="image">
            </div>
            <div class="flex flex-col space-y-1 items-start px-32">
                <label for="description">Description(*)</label>
                <textarea name="description"  id="description" class="rounded-md w-[235px] md:w-[510px]" >{{ $post->description_post }}</textarea>
            </div>
            <button type="submit" class="px-5 py-2 hover:bg-indigo-600 text-white rounded-md bg-indigo-500">Soumettre</button>
        </form>
    </div>

</x-app-layout>