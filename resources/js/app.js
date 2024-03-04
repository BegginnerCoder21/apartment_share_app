import './bootstrap';
import Alpine from 'alpinejs';
window.Alpine = Alpine;


Alpine.start();

import { createApp } from 'vue';
import SearchPost from '@/components/SearchPost.vue';
const app = createApp();

app.component('search-post',SearchPost);
app.mount('#app')

