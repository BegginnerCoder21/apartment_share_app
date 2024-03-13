<x-app-layout>
    <h1 class="text-center mt-3 text-4xl font-semibold text-gray-600">Mes Postes</h1>
    <div class="w-[90%] mx-auto mt-10">
        {{-- <div class=" w-full px-6 p-[1px] bg-indigo-500 ">
            <div>
                
            </div>
        </div> --}}

        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th
                        class="px-5 py-3 border-b-2 border-indigo-400 bg-indigo-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                        Identifiant
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-indigo-400 bg-indigo-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                        Type Poste
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-indigo-400 bg-indigo-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                        Crée le
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-indigo-400 bg-indigo-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                        Genre
                    </th>
                    <th
                        class="px-14 py-3 border-b-2 border-indigo-400 bg-indigo-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts_roommate as $indice => $post) 
                    <tr>
                        <td class="px-5 py-5 border-b border-indigo-400 bg-white text-sm">
                            <span>
                                {{-- incremente de 1 avant l'affichage, 
                                l'indice depart etant 0 il affichera 1 ensuite 2 ...--}}
                                {{ ++$indice }}
                            </span>
                        </td>
                        <td class="px-5 py-5 border-b border-indigo-400 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                <span class="{{ $post->budget ? 'bg-indigo-200 rounded-full px-3 py-1' : 'bg-gray-200 rounded-full px-3 py-1'}} " class="">{{ $post->budget ? 'Colocataire' : 'Colocation' }}</span>
                            </p>
                        </td>
                        <td class="px-5 py-5 border-b border-indigo-400 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{ $post->created_at->format('d M Y') }}
                            </p>
                        </td>
                        <td class="px-5 py-5 border-b border-indigo-400 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{ $post->roommate_gender == 1 ? 'Masculin' : 'Feminin' }} 
                            </p>
                        </td>
                        <td class="py-5  border-b border-indigo-400 bg-white text-sm">
                            <div class="space-x-3">
                                <a href="#" class="px-4 py-2 text-white bg-indigo-500 rounded-sm hover:bg-indigo-600">Supprimer</a>
                                <a href="{{ route('edit.post.roommate',$post->id) }}" class="px-4 py-2 text-white bg-indigo-500 rounded-sm hover:bg-indigo-600">Modifier</a>
                            </div>
                        </td>
                    </tr>   
                    
                @endforeach
                @foreach ($post_sharing as $post)
                    
                    <tr>
                        <td class="px-5 py-5 border-b border-indigo-400 bg-white text-sm">
                            <span>
                                {{-- incremente de 1 avant l'affichage, 
                                l'indice depart etant 0 il affichera 1 ensuite 2 ...--}}
                                {{ ++$indice }}
                            </span>
                        </td>
                        <td class="px-5 py-5 border-b border-indigo-400 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                <span class="{{ $post->budget ? 'bg-indigo-200 rounded-full px-3 py-1' : 'bg-gray-200 rounded-full px-3 py-1'}} " class="">{{ $post->budget ? 'Colocataire' : 'Colocation' }}</span>
                            </p>
                        </td>
                        <td class="px-5 py-5 border-b border-indigo-400 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{ $post->created_at->format('d M Y') }}
                            </p>
                        </td>
                        <td class="px-5 py-5 border-b border-indigo-400 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{ $post->coloc_gender == 1 ? 'Masculin' : 'Feminin' }} 
                            </p>
                        </td>
                        <td class="py-5  border-b border-indigo-400 bg-white text-sm">
                            <div class="space-x-3">
                                <a href="#" class="px-4 py-2 text-white bg-indigo-500 rounded-sm hover:bg-indigo-600">Supprimer</a>
                                <a href="{{ route('edit.post.sharing',$post->id) }}" class="px-4 py-2 text-white bg-indigo-500 rounded-sm hover:bg-indigo-600">Modifier</a>
                            </div>
                        </td>
                    </tr>  
                @endforeach
                
            </tbody>
        </table>
    </div>
</x-app-layout>