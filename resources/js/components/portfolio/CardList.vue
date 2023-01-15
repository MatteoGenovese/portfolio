<template>
    <div id="MyProjects">

        <div class=" d-flex justify-content-center">
            <h1>I miei <span class="fw-bold text-marked"> progetti </span> migliori</h1>
        </div>
        <div class="container">

            <div class="d-flex flex-wrap justify-content-center filtersComponent">

                <FiltersComponent v-for="tag, index in tagToShow" :key="index" :tag="tag" :tagIndex="index"
                    @changeActive="changeActive"  />

            </div>

            <div class="row cardList g-5">
                <div class="col-12 col-md-6 g-5" v-for="work, index in worksFiltered" :key="index">
                    <SingleCard :work="work" />
                </div>
            </div>

        </div>

    </div>
</template>

<script>

import SingleCard from './SingleCard.vue'
import FiltersComponent from './FiltersComponent.vue'


export default {
    //   name: 'CardList',
    components: {
        SingleCard,
        FiltersComponent
    },
    methods: {
        findAllTags() {

            this.works.forEach(work => {
                work.tags.forEach(tag => {
                    if (!this.searchTags.includes(tag)) {
                        this.searchTags.push(tag);
                    }
                });
            });
            this.searchTags.forEach(tag => {
                this.tagToShow.push({
                    'tag': tag,
                    'active': 0
                });
            });
            this.searchTags = [];
        },



        changeActive(tagIndex) {

            this.tagToShow[tagIndex].active = !this.tagToShow[tagIndex].active;
            this.filteringProject(tagIndex);
        },

        checkIfFilterIsActive() {
            var areTagsActive = false;
            this.tagToShow.forEach(tag => {
                if (tag.active) {
                    areTagsActive = true;
                }
            });
            if (areTagsActive) {
                return true;
            }
            else {
                return false;
            }
        },

        filteringProject(tagIndex) {
            this.filteredTag = [];
            this.filteredTag = this.tagToShow.filter(tag => {
                if (tag.active)
                    return true;
            })
            if (this.checkIfFilterIsActive()) {


                this.worksFiltered = [];
                this.works.forEach(work => {

                    for (let index = 0; index < this.filteredTag.length; index++) {
                        if ((work.tags).includes(this.filteredTag[index].tag)) {
                            this.worksFiltered.push(work);
                            break;
                        }
                    }
                });
                this.filteredTag.forEach(tag => {



                });

            }
            else
                this.worksFiltered = this.works;




        }

    },
    data: function () {
        return {

            navLinks: [
                { route: "/", pathTo: "HomePage", name: "Home", isCurrentPage: true, },
                { route: "/ricerca-avanzata", pathTo: "AdvancedSearch", name: "Ricerca", isCurrentPage: false, },
            ],

            filteredTag: [],
            searchTags: [
                'Spring',
                'Laravel',
                'Vue.js',
                'Java',
                'PHP',
                'JavaScript',
                'Axios',

            ],
            tagToShow: [],
            worksFiltered: [],
            works: [
                {
                    id: 1,
                    imageName: 'BoolBnb.png',
                    visible: true,
                    title: 'BoolBnB',
                    description: 'Boolbnb è un progetto web simile ad Airbnb che permette agli utenti di cercare appartamenti e mettersi in contatto con i proprietari, utilizzando filtri di ricerca per trovare l\'alloggio perfetto. I proprietari possono inserire e modificare le informazioni sui loro appartamenti, visualizzare i messaggi ricevuti e le statistiche di visualizzazione, e sponsorizzare l\'appartamento con un abbonamento per aumentare la visibilità.',
                    tags: [
                        'Laravel',
                        'Php',
                        'TomTom API',
                        'JavaScript',
                        'Axios',
                        'Vue.js',
                        'PHP',
                    ],
                    gitHubLink: 'https://github.com/MatteoGenovese/BoolBnb',
                    webSiteLink: '/boolbnb',
                },
                {
                    id: 2,
                    imageName: 'BoolFlix.png',
                    visible: true,
                    title: 'BoolFlix',
                    gitHubLink: 'https://github.com/MatteoGenovese/vue-boolflix',
                    webSiteLink: '/boolflix',
                    description: 'BoolFlix è un sito simile a Netflix in cui gli utenti possono cercare film e serie TV utilizzando una stringa di ricerca, ma i risultati non sono riproducibili e forniscono invece informazioni sui contenuti sotto forma di schede che ruotano. Quando l\'utente accede al sito o la barra di ricerca è vuota, vengono visualizzati i contenuti più popolari. BoolFlix utilizza l\'API di themoviedb.org per ottenere informazioni sui film e le serie TV.',
                    tags: [
                        'JavaScript',
                        'Vue.js',
                        'Moviedb.org API',
                        'Axios'
                    ],
                },
            ]

        }
    },
    mounted() {

        this.worksFiltered = this.works;
        this.findAllTags();
    },

}
</script>

<style lang="scss"  scoped >
.filtersComponent,
.cardList {
    margin-top: 3rem;
}
</style>
