<template>


    <section id="MyProjects">

        <CardList />
    </section>

</template>

<script>

import CardList from './CardList.vue'
import FiltersComponent from './FiltersComponent.vue'

export default {

    name: 'MyProjects',
    components: {
        CardList,
        FiltersComponent
    }

}
</script>

<style lang="scss">

</style>
