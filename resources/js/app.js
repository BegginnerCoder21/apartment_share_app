import './bootstrap';
import Alpine from 'alpinejs';
window.Alpine = Alpine;


Alpine.start();

import { createApp } from 'vue';
import SearchPost from '@/components/SearchPost.vue';
import SearchRoommate from '@/components/SearchRoommate.vue';
import PostRoommate from '@/components/PostRoommate.vue';
import PostSearchAppartment from '@/components/PostSearchAppartment.vue';
import DetailsPostRoommate from '@/components/DetailsPostRoommate.vue';

const app = createApp();

app.component('search-post',SearchPost);
app.component('search-roommate', SearchRoommate);
app.component('post-roommate', PostRoommate);
app.component('post-search-appartment', PostSearchAppartment);
app.component('details-post-roommate', DetailsPostRoommate);
app.mount('#app')

