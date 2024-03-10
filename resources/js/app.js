import './bootstrap';
import Alpine from 'alpinejs';
window.Alpine = Alpine;


Alpine.start();

import { createApp } from 'vue';
import SearchBar from '@/components/posts/SearchBar.vue';
import PostComponent from '@/components/posts/PostComponent.vue';
import PostSearchAppartment from './components/posts/PostSearchAppartment.vue';
import PostRoommate from './components/posts/PostRoommate.vue';
import SearchPost from '@/components/SearchPost.vue';
import SearchRoommate from './components/SearchRoommate.vue';

const app = createApp();

app.component('search-post',SearchPost);
app.component('search-bar',SearchBar); 
app.component('post-search-appartment',PostSearchAppartment); 
app.component('post-roommate',PostRoommate);
app.component('search-roommate',SearchRoommate);
app.component('post-component',PostComponent);
app.mount('#app')

