<template>
    <section id="AboutMe" class="box">



        <div class="heading d-flex justify-content-center">
            <h1> Sono <span class="fw-bold text-marked"> Matteo Genovese</span>! </h1>
        </div>

        <div class="container">

            <div data-aos="fade-in" class="row align-content-lg-center align-self-lg-center flex-column-reverse flex-lg-row">

                <div class="col-lg-8 col-12">
                    <div data-aos="fade-left" class="about-me d-flex flex-column w-100 justify-content-center">
                        <div class="about-me__description d-flex align-items-center ">
                            <div class="icon">
                                <i class="fa-solid fa-code"></i>
                            </div>
                            <p>
                                Sono un appassionato di tecnologia e innovazione. Come sviluppatore web, sono in grado di
                                creare e implementare siti web accattivanti e di facile utilizzo.

                            </p>
                        </div>
                        <div class="about-me__description d-flex align-items-center">
                            <div class="icon">
                                <i class="fa-solid fa-wand-magic-sparkles"></i>
                            </div>
                            <p>

                                Ho esperienza con tecnologie front-end nonché tecnologie back-end. Sono abile nella
                                creazione di design reattivi e ottimizzati per i dispositivi mobili.

                            </p>
                        </div>
                        <div class="about-me__description d-flex align-items-center">
                            <div class="icon">
                                <i class="fa-solid fa-people-group"></i>
                            </div>
                            <p>

                                Sono un giocatore di squadra e mi piace collaborare con designer, project manager e altri
                                professionisti per dare vita ai progetti.

                                Inoltre, sono altamente organizzato e attento ai dettagli, con una forte capacità di
                                individuare e risolvere problemi tecnici.

                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-12 profile-photo">
                    <div data-aos="fade-right" class="d-flex justify-content-center  profile-photo__clip">
                        <!-- <img :src="require(`../assets/FotoLinkedin.jpeg`)" alt="" class="profile-photo-clip"> -->
                        <img :src="'./images/FotoLinkedin.jpeg'" alt="" class="w-100">

                    </div>
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
#AboutMe {


    .about-me {
        &__description:not(:last-child) {
            margin-bottom: 2rem;
        }

        .icon {
        font-size: 4rem;
        margin-right: 3rem;
        &>* {
            background-image: linear-gradient(to right bottom,
                    rgba(#0F2027, 0.9),
                    rgba(#1CB5E0, 0.9));
            -webkit-background-clip: text;
            color: transparent;
        }
    }
    }

    .heading {
        margin-bottom: 3rem;
    }

    .profile-photo{
            &__clip{
                width: 100%;
                img{
                    max-width: 30rem;
                    clip-path: circle(50% at 50% 50%);
                }
            }


    }
}
</style>
