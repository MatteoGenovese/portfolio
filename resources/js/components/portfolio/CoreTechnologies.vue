<template>
    <section id="CoreTechnologies">

        <div class="heading d-flex justify-content-center">
                <h1>Le <span class="fw-bold text-marked"> tecnologie </span> che conosco</h1>
        </div>


        <div class="container">
            <div class="row">

                <div class="col-md-6 col-12 g-5">
                    <div data-aos="fade-right" class="technology-card">
                        <div class="technology-card__image w-100 align-content-center d-flex align-self-center ">
                            <img :src="'./images/frameworks.png'" class="  w-100 align-items-center">
                        </div>
                        <div class="technology-card__description">
                            <p class="text-justify">
                                Utilizzo diversi framework per lo sviluppo di app. Ad esempio, uso Spring per
                                creare app in Java, Laravel per app in PHP e Vue.js per interfacce utente interattive.
                                Questi framework mi aiutano a creare soluzioni efficienti e scalabili.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-12 g-5">
                    <div data-aos="fade-right" class="technology-card">
                        <div class="technology-card__image w-100  align-content-center d-flex align-self-center ">
                            <img :src="'./images/languages.png'" class="  w-100 align-items-center">
                        </div>
                        <div class="technology-card__description">
                            <p class="text-justify">
                                I framework con cui lavoro utilizzano Java, PHP e JavaScript. Uso questi linguaggi per
                                creare soluzioni personalizzate. Ad esempio, il mio background in Java mi permette di
                                creare soluzioni per aziende, mentre PHP e JavaScript mi aiutano a creare soluzioni per il web.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-12 g-5">
                    <div data-aos="fade-right" class="technology-card">
                        <div class="technology-card__image w-100  align-content-center d-flex align-self-center ">
                            <img :src=" './images/markupAndStyle.png'" class="  w-100 align-items-center">
                        </div>
                        <div class="technology-card__description">
                            <p class="text-justify">
                                Sviluppo interfacce utente utilizzando HTML, CSS, Sass e Bootstrap. Creo layout responsivi (adattabili ad ogni dispositivo ) e utilizzo Sass e Bootstrap per lo styling delle interfacce utente.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-12 g-5">
                    <div data-aos="fade-right" class="technology-card">
                        <div class="technology-card__image w-100  align-content-center d-flex align-self-center ">
                            <img :src=" './images/db.png'" class="  w-100 align-items-center">
                        </div>
                        <div class="technology-card__description">
                            <p class="text-justify">
                                Sono in grado di creare, e interagire con i database attraverso query SQL e tramite Spring e Laravel che offrono un canale semplificato per la comunicazione con le basi di dati.
                            </p>
                        </div>
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
<style lang="scss" >

@import '../../../sass/portfolio/app.scss';

#CoreTechnologies{
    min-height: 20rem;
}

.technology-card{
    background-image: linear-gradient(
                to right bottom,
                rgba($primary_color_light, 0.7),
                rgba($secondary_color_light, 0.7));
    border-radius: 5rem;
    height: 100%;
    display: flex;
    flex-direction: column;
    & > * {
        padding: 1rem 5rem ;
    }

    .heading {
        margin-bottom: 3rem;
    }

    &__image {
        width: 100%;
        img {
            height: 15rem;
            object-fit: contain;
        }

    }
}

</style>
