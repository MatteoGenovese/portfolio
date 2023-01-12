<template>
    <div class="Filter mx-2">

        <button v-if="!tag.active"
                type="button"
                class="btn btn-outline-primary"
                @click="$emit('changeActive', tagIndex )">
            {{ tag.tag }}

        </button>

        <button v-else
                type="button"
                class="btn btn-primary"
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

<style lang="scss" scoped >

</style>
