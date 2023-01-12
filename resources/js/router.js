import Vue from 'vue';
import { createRouter, createWebHistory } from 'vue-router';

window.Vue = require('vue');

Vue.use(createRouter);

//importo le singole pagine
import HomePortfolio from './pages/portfolio/HomePortfolio.vue';
import ComingSoonComponent from './pages/portfolio/ComingSoonComponent.vue';
import BoolflixHome from './pages/boolFlix/BoolflixHome.vue';
import BoolbnbHomePage from './pages/boolBnb/BoolbnbHomePage.vue';
import AdvancedSearch from './pages/boolBnb/AdvancedSearch.vue';
import PropertyOverview from './pages/boolBnb/PropertyOverview.vue';

//mode history è per il link sopra a slug e non con #, perchè vueRouter di base funziona con #
//ogni link è un oggetto in cui inserisco le informazioni che mi servono
//path
//name
//component
const router = new createRouter({

    history: createWebHistory(),

    routes: [
        //Portfolio
        {
            path: '/',
            name: 'HomePortfolio',
            component: HomePortfolio,
        },
        {
            path: '/comingsoon',
            name: 'comingsoon',
            component: ComingSoonComponent,
        },
        //Boolflix
        {
            path: '/boolflix',
            name: 'boolflix',
            component: BoolflixHome,
        },
        //BoolBnb
        {
            path: '/boolbnb',
            name: 'HomePage',
            component: BoolbnbHomePage
        },
        {
            path: '/boolbnb/ricerca-avanzata/:query?',
            name: 'AdvancedSearch',
            component: AdvancedSearch,
            props: true,
        },
        {
            path: '/boolbnb/abitazione/:id',
            name: 'SingleHome',
            component: PropertyOverview,
            props: true,
        }


    ]

});

export default router