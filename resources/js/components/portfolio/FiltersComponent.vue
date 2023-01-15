<template>
    <div class="Filter mx-2">

        <button v-if="!tag.active"
                type="button"
                class="btn btn__outline-custom"
                @click="$emit('changeActive', tagIndex )">
            {{ tag.tag }}

        </button>

        <button v-else
                type="button"
                class="btn btn__custom"
                @click="$emit('changeActive', tagIndex )">

            {{ tag.tag }}

        </button>




    </div>
</template>

<script>

export default {
    // name: 'FiltersComponent',
    components: {

    },
    methods: {



    },
    props:{

        tag:{
            require:true,
            type:Object
        },
        tagIndex:{
            require:true,
            type:Number
        }

    },
    data: function () {
        return {
            activeButton: 0,
        }
    }



}
</script>

<style lang="scss" >
@import '../../../sass/portfolio/app.scss';


button.btn{

    transition: all 0.2s ease-out;
    box-shadow: 0 1rem 2rem rgba($color: #000000, $alpha: .3);
    border: 1px solid rgba($secondary_color_light, 0.8);
    font-size: $default-font-size;

    &__outline-custom{
        color: $secondary_color_light;
        background-color: $primary_color_light;

        &:hover{
            color: $primary_color_light;
            background-color: $secondary_color_light;
            scale: 1.1;
            transform: translateY(-0.3rem);
        }
    }

    &__custom{
        color: $primary_color_light;
        background-color: $secondary_color_light;

        &:hover{
            color: $secondary_color_light;
            background-color: $primary_color_light;
            scale: 1.1;
            transform: translateY(-0.3rem);
        }
    }




    &:active{
        background-color: $secondary_color_light;
        color: $primary_color_light;
        }
}

</style>
