<template>
    <section id="jumbotron" class="box">

        <div class="h-100 d-flex justify-content-center align-items-center align-content-center">

            <div class="align-items-center">
                <p>
                    Hello, visitor.
                </p>

                <h2>
                    This is a PORTFOLIO of a full stack web developer
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
    background-size: cover;
    background-position: center;


    background-image:linear-gradient(
                        to right bottom,
                        rgba(#0F2027, 0.9),
                        rgba(#1CB5E0, 0.9)),
                        url(../../../assets/jumbotron.jpg);
    width: 100%;
    object-fit: cover;



    height: calc(100vh - 5rem);



    p, h1, h2{
        color: #eeeeee;
    }
}

.profile-photo {
    clip-path: polygon(25% 0%, 100% 0%, 75% 100%, 0% 100%);
}

</style>>
