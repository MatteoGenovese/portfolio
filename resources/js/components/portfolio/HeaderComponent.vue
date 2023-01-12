<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="portfolio-navbar">
    <div class="container">

            <a class="navbar-brand" href="#">MG Portfolio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>


                </ul>

            </div>

        </div>
    </nav>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped >




$primary-color-blue: #457B9D ;


nav{
    background-color: var($primary-color-blue) !important;
    height: 4rem;
    padding: 0;
}



</style>
