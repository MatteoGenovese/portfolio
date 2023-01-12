<template>

    <div class="blank">
        <HeaderComponent />
        <div class="d-flex justify-content-center align-content-center align-items-center">
            <img :src="'./images/comingsoon.png'" alt="" class="profile-photo-clip w-25 h-25">
        </div>
    </div>
</template>

<script>

import HeaderComponent from '../../components/portfolio/HeaderComponent.vue'


export default {

  components: {
    HeaderComponent

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

.blank{
    height: 100vh;
}

</style>
