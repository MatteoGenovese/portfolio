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

<style scoped lang="scss">



p, div{
  font-size: 1.2rem;
}

.text-marked{
  color:#1CB5E0;
}

.box{
  min-height: 40rem;
}

section{
  background-color:#eeeeee;
  padding: 5rem 0;
}


section:nth-child(even){
    background-color: white;
}

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align:justify;
  color: #2c3e50;

  h1{
    text-align: center;
  }
}
nav {
  padding: 30px;
  a {
    font-weight: bold;
    color: #2c3e50;
    &.router-link-exact-active {
      color: #42b983;
    }
  }
}

</style>
