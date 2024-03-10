<template>
    <div>
    <!-- bar de recherche -->
    <search-bar @send-content-search="communeSearch" ></search-bar>

    <!-- Carte d'appartement -->
    <post-roommate :dataRoommate="dataRoommate"></post-roommate>
    
    <!-- carte de colocataire -->
    <post-search-appartment :dataSearchPost="dataSearchPost"></post-search-appartment>
    </div>
</template>

<script setup lang="ts">
import axios from 'axios';
import {ref, onMounted} from 'vue';
import usePosts from '../../composables/usePosts';
import type {searchCommuneType} from '../../types/searchCommune';

const dataRoommate = ref([]);
const dataSearchPost = ref([]);


const getSearchPost = async() => {
    await axios.get('/get-search-post').then((res) => {
        
        dataSearchPost.value = res.data.SearchPost
    }).catch((error) => {
        console.log('error',error);
    });
}

const {
    
} = usePosts();

const getPostRoommate = async() => {

    await axios.get('get-post-roommate').then((res) => {
        dataRoommate.value = res.data.postRoommate;
    }).catch((error) => {
        console.log('error',error);
    });
}

const communeSearch = async(contentSearch : searchCommuneType) => {
        
        if(contentSearch.content_search == ''){
            return;
        }
        
        await axios.get('api/commune-search',{
            params : {
                search : contentSearch.content_search,
                category_post : contentSearch.category_post
            }
        }).then(async (res) => {
            
            dataRoommate.value = res.data.success;
            console.log(dataRoommate.value);
            
            
            
    
        }).catch((error) => {
            console.log(error);
        });
    
    
        contentSearch.content_search = '';
}


onMounted(async() => {
    await getPostRoommate();
    await getSearchPost();
});


</script>

<style scoped>

</style>