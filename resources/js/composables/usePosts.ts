import axios from 'axios';  
import {ref} from 'vue';
import type { searchCommuneType } from '../types/searchCommune';
export default function usePosts(){


const content_search = ref<searchCommuneType>({
    content_search : '',
    category_post : 1
});





const getUrlSearchPost = (id : string) => {
    
    return '/details-search-post/' + id;
}



const getUrl = (id : string) => {
    
    return '/details-post-roommate/' + id;
}

const getImageUrl = (imageUrl : string) => {
        return 'storage/postImage/' + imageUrl;
    }
    



    return {
        
        content_search,
      
        getUrl,
        getImageUrl,
      
        
        getUrlSearchPost,
        
    }
}