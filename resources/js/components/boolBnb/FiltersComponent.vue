<template>
    <section class="container">
        <div class="row px-md-5">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3 mb-4" v-for="service in services" :key="service.id">
                        <input type="checkbox" :value="service.id" :name="service.name + '_check'" :id="service.name + '-check'" v-model="apartmentServices">
                        <label :for="service.name + '-check'">{{ service.name }}</label>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-6 flex-column justify-content-between">
                <div class="mb-3">
                    <label for="room-no">Numero camere</label>
                    <select name="room_no" id="room-no" v-model="roomNo" class="form-select" aria-label="Default select example">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="bed-no">Posti letto</label>
                    <select name="bed_no" id="bed-no" v-model="bedNo" class="form-select" aria-label="Default select example">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>

            </div>

            <div class="col-6 col-md-6 col-lg-6 d-flex flex-column justify-content-evenly">
                <div>
                    <label for="search-range">Raggio di ricerca</label>
                    <div class="d-flex align-items-center ms-2">
                        <input type="range" name="search_range" id="search-range" default="20" min="10" max="1000" step="10" oninput="this.nextElementSibling.value = this.value" v-model="searchRange">
                        <output class="ms-1">20 </output> <span class="ms-1"> km</span>
                    </div>
                </div>
                <button class="btn btn-lt btn-primary text-white mx-2" @click="sendFiltersData()">Applica filtri</button>
            </div>
        </div>
    </section>
</template>

<script>
import axios from "axios";
export default {
    name: "FiltersComponent",

    data: function() {
        return {
            services: [],
            bathNo: 0,
            roomNo: 0,
            bedNo: 0,
            squareMeters: 0,
            searchRange: 20,
            apartmentServices: [],
        }
    },
    methods: {
        getServices() {
            axios.get("http://127.0.0.1:8000/api/services")
            .then((response) => {
                this.services = response.data.results;
            })
        },

        sendFiltersData() {
            let services = '';

            if(this.apartmentServices.length === 0){
                services = null;
            }else{
                this.apartmentServices.forEach((service, index) => {
                    if(index == 0) {
                        services = service;
                    } else {
                        services = services + "-" + service;
                    }
                });
            }

            this.$emit("sendFilters", {
                // bathNo: this.bathNo,
                roomNo: this.roomNo,
                bedNo: this.bedNo,
                // squareMeters: this.squareMeters,
                range: this.searchRange,
                services: services,
            })
        }
    },
    created() {
        this.getServices();
    }
}
</script>

<style lang="scss" scoped>

    button{
        height: 60px;
    }


</style>
