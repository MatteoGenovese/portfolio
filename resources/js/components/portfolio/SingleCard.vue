<template>
    <div v-if="work.visible" class="wrapper" data-aos="fade-in">
        <div class="single-card">

            <div class="front">
                <img :src="`./images/works/${work.imageName}`" alt="" class="img-fluid">
            </div>

            <div class="back d-flex flex-column justify-content-between">
                <div class="content">
                    <h2>{{ work.title }}</h2>
                    <p>{{ work.description }}</p>
                </div>

                <div class="link">
                    <a v-if="work.webSiteLink" :href="work.webSiteLink" class="btn btn-info">
                        View more
                    </a>
                    <a v-else href="/comingsoon" class="btn btn-info">
                        View more
                    </a>

                    <a :href="work.gitHubLink" class="btn btn-primary ms-2">
                        GitHub link
                    </a>
                    <div class="tags">
                        Tags:
                        <span v-for="(tag, index) in work.tags" :key="index">
                            #{{ tag }}
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>


export default {

    props: {
        work: {
            type: Object,
            required: true
        }
    },

}
</script>

<style lang="scss" scoped >
.wrapper,
.single-card {
    height: 35rem;
    margin: 2rem 0.5rem;
}

.wrapper {
    perspective: 900px;
}

.link {
    .tags {
        margin-top: 0.5rem;
    }
}

.single-card {
    text-align: center;
    transition: all 0.75s cubic-bezier(0.7, -.5, 0.3, 1.8);
    transform-style: preserve-3d;


    box-shadow: 20px -20px 20px rgba(0, 0, 0, 0.255);
    -moz-box-shadow: 10px -10px 5px rgba(0, 0, 0, 0.255);
    -webkit-box-shadow: 10px -10px 5px rgba(0, 0, 0, 0.255);
    -o-box-shadow: 10px -10px 5px rgba(0, 0, 0, 0.255);
    border-radius: 5px;
}

.wrapper:hover .single-card {
    transform: rotateY(180deg);
}

.front,
.back {
    height: 100%;

    background-color: aquamarine;
    width: 100%;
    overflow: hidden;
    position: relative;
    border-radius: 5px;
    top: 0;
    left: 0;
    backface-visibility: hidden;

    img {
        width: 100%;
        object-fit: contain;
    }

}

.front {
    cursor: pointer;
    backface-visibility: hidden;
    background-size: contain;
    background-position: center center;

}

.back {
    transform: rotateY(180deg);
    position: absolute;
    background-color: #eeeeee;
    padding: 0.5rem;
}

.content {
    padding-top: 5%;

    h2 {
        font-size: 35px;
        margin: 0;
        font-weight: 300;
    }

    p {
        font-size: 1.1rem;
        margin: 1rem 0;
        font-weight: 300;
    }
}



.content h4 {
    margin: 0;
}
</style>
