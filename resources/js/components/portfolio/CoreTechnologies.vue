<template>
    <section id="CoreTechnologies">

        <div class=" d-flex justify-content-center">
                <h1>Le <span class="fw-bold text-marked"> tecnologie </span> che conosco</h1>
        </div>


        <div class="container">
            <div class="row">


                <div class="col-6">
                    <div data-aos="fade-right" class="d-flex flex-column w-100 ">
                        <div class="technology-icon w-100  align-content-center d-flex align-self-center ">
                            <img :src="'./images/frameworks.png'" class="  w-100 align-items-center">
                        </div>
                        <div class=" w-100">
                            <p class="text-justify">
                                Utilizzo diversi framework per lo sviluppo di app. Ad esempio, uso Spring per
                                creare app in Java, Laravel per app in PHP e Vue.js per interfacce utente interattive.
                                Questi framework mi aiutano a creare soluzioni efficienti e scalabili.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div data-aos="fade-right" class="d-flex flex-column w-100 ">
                        <div class="technology-icon w-100  align-content-center d-flex align-self-center ">
                            <img :src="'./images/languages.png'" class="  w-100 align-items-center">
                        </div>
                        <div class=" w-100">
                            <p class="text-justify">
                                I framework con cui lavoro utilizzano Java, PHP e JavaScript. Uso questi linguaggi per
                                creare soluzioni personalizzate. Ad esempio, il mio background in Java mi permette di
                                creare soluzioni per aziende, mentre PHP e JavaScript mi aiutano a creare soluzioni per il web.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div data-aos="fade-right" class="d-flex flex-column w-100 ">
                        <div class="technology-icon w-100  align-content-center d-flex align-self-center ">
                            <img :src=" './images/markupAndStyle.png'" class="  w-100 align-items-center">
                        </div>
                        <div class=" w-100">
                            <p class="text-justify">
                                Sviluppo interfacce utente utilizzando HTML, CSS, Sass e Bootstrap. Creo layout responsivi (adattabili ad ogni dispositivo ) e utilizzo Sass e Bootstrap per lo styling delle interfacce utente.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div data-aos="fade-right" class="d-flex flex-column w-100 ">
                        <div class="technology-icon w-100  align-content-center d-flex align-self-center ">
                            <img :src=" './images/db.png'" class="  w-100 align-items-center">
                        </div>
                        <div class=" w-100">
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
<style lang="scss"  scoped >
p {
    margin-top: 3rem;
}

#CoreTechnologies{
    min-height: 20rem;
}

.technology-icon {
    margin-top: 3rem;
    max-width: 30rem;

    img {
        height: 150px;
        object-fit: contain;

    }

}
</style>
