<template>
    <div>
        <HeaderComponent />

        <HomeJumbotron />

        <AboutMe />

        <CoreTechnologies />

        <MyProjects />

    </div>
</template>

<script>

import HomeJumbotron from '../../components/portfolio/HomeJumbotron.vue'
import CoreTechnologies from '../../components/portfolio/CoreTechnologies.vue'
import AboutMe from '../../components/portfolio/AboutMe.vue'
import MyProjects from '../../components/portfolio/MyProjects.vue'
import HeaderComponent from '../../components/portfolio/HeaderComponent.vue'

export default {
    //   name: 'HomePortfolio',
    components: {
        HomeJumbotron,
        CoreTechnologies,
        HeaderComponent,
        AboutMe,
        MyProjects
    }
}
</script>

<style lang="scss">
@import '../../../sass/portfolio/app.scss';

p,
div,
button{
    font-size: $default-font-size;
}

.text-marked {
    background-image: linear-gradient(
                to right bottom,
                rgba($secondary_color_dark, 0.9),
                rgba($secondary_color_light, 0.9));
    -webkit-background-clip: text;
    color: transparent;
}

.box {
    min-height: 40rem;
}

section {
    background-color: #eeeeee;
    padding: 5rem 0;
}


section:nth-child(even) {
    background-color: white;
}

#app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: justify;
    color: #2c3e50;

    h1 {
        text-align: center;
    }
}

nav {
    margin: 3rem;

    a {
        font-weight: bold;
        color: #2c3e50;

        &.router-link-exact-active {
            color: #42b983;
        }
    }
}
</style>
