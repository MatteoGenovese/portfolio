<template>
    <div>
        <section class="container p-0 position-relative">

            <HeaderComponentVue />
            <Jumbotron />

        </section>

        <CitiesSuggestions />
        <DbCountSection />

        <FooterComponent />

    </div>
</template>


<script>
import Jumbotron from '../../components/boolBnb/Home-Components/Jumbotron.vue';
import CitiesSuggestions from '../../components/boolBnb/Home-Components/CitiesSuggestions.vue';
import DbCountSection from '../../components/boolBnb/Home-Components/DbCountSection.vue';
import HeaderComponentVue from '../../components/boolBnb/HeaderComponent.vue';
import FooterComponent from '../../components/boolBnb/FooterComponent.vue';

export default {
    name:"HomePage",
    components:{
    Jumbotron,
    CitiesSuggestions,
    DbCountSection,
    HeaderComponentVue,
    FooterComponent
},
    watch:{

    },
    data(){
        return{
            lat: '',
            lon: '',
            apartments: [],
            isFilterPanelVisible: false,
            bedNo: 0,
            roomNo: 0,
            bedNo: 0,
            squareMeters: 0,
            searchRange: 20,
            services: [],
        }
    },
}
</script>

<style lang="scss" scoped>

@import '../../../sass/boolBnb/app.scss';

*{
    font-family: $brandTxtFam-1;

    &::selection{
        background-color: rgba($secondaryLight, .3);
        color: $primary;
    }
}

.apartment-card {
    transition: all .3s;
    text-decoration: none;
    color: black;
    &:hover {
        transform: scale(1.1);
    }
    &:active {
        transform:scale(.95);
    }
}


</style>
