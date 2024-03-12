<template>
    <div id="apartment">
        <h1 class="text-4xl text-center font-semibold " v-text="props.postRoommateTitle"></h1>  
        <div>
            <div  class="grid w-full mb-14 gap-y-6 grid-cols-1 mt-10  sm:grid-cols-2 lg:grid-cols-3">
                <div v-for="post in props.dataRoommate" :key="post.id" class="relative mx-auto w-[80%]">
                    <a :href="getUrl(post.id)" class="relative inline-block w-full transform transition-transform duration-300 ease-in-out hover:-translate-y-2">
                        <div class="rounded-lg bg-white p-4 shadow">
                            <div class="relative flex h-52 justify-center overflow-hidden rounded-lg">
                                <div class="w-full transform transition-transform duration-500 ease-in-out hover:scale-110">
                                    <div class="absolute inset-0 bg-black bg-opacity-80">
                                        <img :src="getImageUrl(post.images[0].imageUrl)" alt="" />
                                    </div>
                                </div>
                                <span class="absolute top-0 right-2 z-10 mt-3 ml-3 inline-flex select-none rounded-sm bg-indigo-400 px-2 py-1 text-xs font-semibold text-white"> {{ post.commune.libelle }} </span>
                                <span class="absolute top-0 left-0 z-10 mt-3 ml-3 inline-flex select-none rounded-sm bg-indigo-500 px-2 py-1 text-xs font-semibold text-white">{{ post.rent }} fcfa/mois</span>
                            </div>    
                            <div class="mt-4 space-y-3">
                                <h2 class="line-clamp-1 text-2xl font-medium text-gray-800 md:text-lg" title="New York">Caution: {{ post.security_deposit}} fcfa</h2>
                                <h3 class="line-clamp-1 text-xl font-medium text-gray-500 md:text-sm" title="type-appartment">Type: {{ post.housing_type_id == 1 ? 'Imeuble' : 'Cour commune' }}</h3>
                            </div>
                            <div class="mt-4">
                                <p class="line-clamp-1 mt-2 text-lg  text-gray-300">{{ post.description_post }}</p>
                            </div>
                            <div class="justify-center">
                                <div class="mt-4 flex space-x-3 overflow-hidden rounded-lg px-1 py-1">    
                                    <p class="flex items-center font-medium text-gray-800">
                                        <i class="fa fa-home mr-2 text-blue-900"></i>
                                        {{post.is_furnished ? 'Meublé' : 'Non meublé'}}
                                    </p>
                                </div>
                            </div>
                            <div class="mt-8 grid grid-cols-2">
                                <div class="flex items-center">
                                    <div class="relative">
                                        <div class="h-6 w-6 rounded-full bg-gray-200 md:h-8 md:w-8"></div>
                                        <span class="bg-primary-red absolute top-0 right-0 inline-block h-3 w-3 rounded-full"></span>
                                    </div>
                    
                                    <p class="line-clamp-1 ml-2 text-gray-800">{{post.user.firstname}} {{post.user.lastname}}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <span v-if="props.dataEmptyRoommate" class="text-lg text-gray-500 text-center flex justify-center">Auncune annonce n'a été trouvé !</span>
        </div>
    </div>
    
</template>

<script setup lang='ts'>

import usePosts from '../../composables/usePosts';


const props = defineProps<{
    dataRoommate : [],
    postRoommateTitle : string,
    dataEmptyRoommate : boolean
}>();

const {
    
    getUrl,
    getImageUrl,
    
} = usePosts();






</script>

<style  scoped>

</style>

