import {createApp} from 'vue';
import cabecera from './vue-components/cabecera';
import tabla from './vue-components/tabla.vue';

createApp({
    components: {
        cabecera,
        tabla,
    }
}).mount("#app");
