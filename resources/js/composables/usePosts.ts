import axios from 'axios';  
import {ref} from 'vue';
export default function usePosts(){


const content_search = ref('');
const category_post = ref(1);
const dataRoommate = ref([]);
const dataSearchPost = ref([]);

const getUrlSearchPost = (id) => {
    
    return '/details-search-post/' + id;
}

const getSearchPost = async() => {
    await axios.get('/get-search-post').then((res) => {
        dataSearchPost.value = res.data.SearchPost
    }).catch((error) => {
        console.log('error',error);
    });
}

const getUrl = (id) => {
    
    return '/details-post-roommate/' + id;
}

const getImageUrl = (imageUrl) => {
        return 'storage/postImage/' + imageUrl;
    }
    
const communeSearch = async() => {
    
        if(content_search.value == ''){
            return;
        }
        
        await axios.get('api/commune-search',{
            params : {
                search : content_search.value,
                category_post : category_post.value
            }
        }).then(async (res) => {
            console.log(res.data.success);
    
        }).catch((error) => {
            console.log(error);
        });
    
    
        content_search.value = '';
}

const getPostRoommate = async() => {
    await axios.get('get-post-roommate').then((res) => {
        dataRoommate.value = res.data.postRoommate;
    }).catch((error) => {
        console.log('error',error);
    });
}


    return {
        communeSearch,
        content_search,
        category_post,
        dataRoommate,
        getUrl,
        getImageUrl,
        getPostRoommate,
        getSearchPost,
        getUrlSearchPost,
        dataSearchPost
    }
}