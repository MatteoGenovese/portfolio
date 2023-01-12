<template>
    <section  id="AboutMe" class="box">



            <div class=" d-flex justify-content-center">
                <h1>    Sono <span class="fw-bold text-marked"> Matteo Genovese</span>!  </h1>
            </div>

            <div data-aos="fade-in" class=" d-flex container flex-column-reverse flex-lg-row ">

                <div class="d-flex align-items-center  ">
                    <div data-aos="fade-left" class="d-flex flex-column w-100 justify-content-center">
                        <div class="d-flex align-items-center ">
                            <div class="icon">
                                <i class="fa-solid fa-code"></i>
                            </div>
                            <p>
                                Sono un appassionato di tecnologia e innovazione. Come sviluppatore web, sono in grado di creare e implementare siti web accattivanti e di facile utilizzo.

                            </p>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="icon">
                                <i class="fa-solid fa-wand-magic-sparkles"></i>
                            </div>
                            <p>

                                Ho esperienza con tecnologie front-end nonché tecnologie back-end. Sono abile nella creazione di design reattivi e ottimizzati per i dispositivi mobili.

                            </p>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="icon">
                                <i class="fa-solid fa-people-group"></i>
                            </div>
                            <p>

                                Sono un giocatore di squadra e mi piace collaborare con designer, project manager e altri professionisti per dare vita ai progetti.

                                Inoltre, sono altamente organizzato e attento ai dettagli, con una forte capacità di individuare e risolvere problemi tecnici.

                            </p>
                        </div>
                    </div>
                </div>


                <div class="d-flex justify-content-center align-content-center align-items-center mx-5">
                    <div data-aos="fade-right" class="d-flex justify-content-center profile-photo">
                        <!-- <img :src="require(`../assets/FotoLinkedin.jpeg`)" alt="" class="profile-photo-clip"> -->
                        <img :src="'./images/FotoLinkedin.jpeg'" alt="" class="profile-photo-clip">

                    </div>
                </div>


            </div>


    </section>
</template>

<script>

export default {

}
</script>

<style scoped lang="scss">


#AboutMe{


    .icon{
        font-size: 3rem;
        margin-right: 1rem;
    }

    .profile-photo{
        height: 30rem;
    }

    .fa-code{
        color: green;
    }

    .fa-wand-magic-sparkles{
        color: blue;
    }

    .fa-people-group{
        color: red;
    }
}

.profile-photo-clip {

    width: 500px;
    clip-path: polygon(25% 0%, 100% 0%, 75% 100%, 0% 100%);
}
</style>
