<template>
        
        <div class="flex justify-center w-[70%]  mx-auto">
            <div class="container mx-auto  rounded-lg p-14">
                <form @submit.prevent="$emit('sendContentSearch',content_search)" id="recherche">
                    <div class="sm:flex items-center bg-indigo-500 rounded-lg overflow-hidden px-2 py-1 justify-between">
                        <input v-model="content_search.content_search" class="text-base w-[400px] text-gray-400 flex-grow outline-none px-2 " type="text" placeholder="Entrer une commune..." />
                        <div class="ms:flex items-center px-2 rounded-lg space-x-4 mx-auto ">
                            <select id="type" v-model="content_search.category_post" name="type" class="text-base w-[135px] text-gray-800 outline-none px-4 py-2 rounded-lg">
                                <option value="1" selected>Colocation</option>
                                <option value="2">Colocataire</option>
                            </select>
                            <button type="submit" class="bg-white hover:bg-indigo-400 hover:text-white  text-indigo-500 text-base rounded-lg px-4 py-2 font-thin">Rechercher</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</template>


<script setup>

import usePosts from '../../composables/usePosts.ts';



const { 
    communeSearch, 
    content_search, 
} = usePosts();

</script>

<style scoped>

</style>