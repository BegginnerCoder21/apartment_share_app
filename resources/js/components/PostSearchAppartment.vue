<template>
    <div class="grid w-full mb-14 gap-y-6 grid-cols-1 mt-10  sm:grid-cols-2 lg:grid-cols-3">
        <div v-for="post in dataSearchPost" class="relative mx-auto w-[80%]">
                <a :href="getUrl(post.id)" class="relative inline-block w-full transform transition-transform duration-300 ease-in-out hover:-translate-y-2">
                <div class="rounded-lg bg-white p-4 shadow">

                    <p class="text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate cumque ipsa tempore repudiandae beatae sit exercitationem doloribus</p>
                    <div class="space-y-3 mt-6">
                        <h1 class="text-xl font-semibold ">Commune shouhaité:</h1>
                        <div v-for="commune in post.communes" class="space-x-3 mt-3 grid grid-cols-3 space-y-2">
                            
                            <span class="bg-indigo-500 flex flex-row px-2 py-1 text-xs font-semibold text-white"> {{ commune.libelle }}</span>
                        </div>
                        <h2 class="line-clamp-1 mt-3 text-2xl font-medium text-gray-600 md:text-lg" title="New York">Budget: <span class="text-indigo-500"> {{ post.budget }} fcfa</span></h2>
                        <h2 class="line-clamp-1 mt-3 text-2xl font-medium text-gray-600 md:text-lg" title="New York">Type souhaité: <span class="text-indigo-500">{{ post.appartment_type == 1 ? 'Imeuble' : 'Cour commune'}}</span> </h2>
                        <h2 class="line-clamp-1 mt-3 text-2xl font-medium text-gray-600 md:text-lg" title="New York">Disponible à partir du: <span class="text-indigo-500">{{ post.availability_date }}</span> </h2>
                    </div>
                    
                
                    <div class="mt-8 grid grid-cols-2">
                    <div class="flex items-center">
                        <div class="relative">
                        <div class="h-6 w-6 rounded-full bg-gray-200 md:h-8 md:w-8"></div>
                        <span class="bg-primary-red absolute top-0 right-0 inline-block h-3 w-3 rounded-full"></span>
                        </div>

                        <p class="line-clamp-1 ml-2 text-gray-800">{{ post.user.firstname }} {{ post.user.lastname }}</p>
                    </div>

                    </div>
                </div>
                </a>
            </div>
    </div>
</template>

<script setup>

import {onMounted,ref} from 'vue';
const dataSearchPost = ref([]);

const getUrl = (id) => {
    
    return '/details-search-post/' + id;
}

onMounted(async() => {
    await axios.get('/get-search-post').then((res) => {
        dataSearchPost.value = res.data.SearchPost
        console.log( dataSearchPost.value);
    }).catch((error) => {
        console.log('error',error);
    });
});

</script>

<style lang="scss" scoped>

</style>