<template>
    <section id="jumbotron" class="box">

        <div class="h-100 d-flex justify-content-center align-items-center align-content-center">

            <div class="align-items-center">
                <p>
                    Hello, visitor.
                </p>

                <h2>
                    This is a PORTFOLIO of a full stack developer
                </h2>
            </div>

        </div>


    </section>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped >



#jumbotron {
    background-color: #0c0c0c;
    // background-image: linear-gradient(to right,  #0F2027, #203A43, #2C5364);

    // background-image: linear-gradient(to right,  #005AA7, #FFFDE4);

    background-image: linear-gradient(to right,  #0F2027, #1CB5E0 );



    height: calc(100vh - 56px);



    p, h1, h2{
        color: #eeeeee;
    }
}

.profile-photo {
    clip-path: polygon(25% 0%, 100% 0%, 75% 100%, 0% 100%);
}

</style>>
