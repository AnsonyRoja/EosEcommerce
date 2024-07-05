<template>    
    <section id="main-slider" style="overflow: hidden; height: auto !important;">
        <div :id="id" class="carousel slide" data-ride="carousel" style="height:550px !important;">
            <ol class="carousel-indicators">
                <li v-for="(slider, index) in sliders" v-bind:key="slider.id" :data-target="'#'+id" :data-slide-to="index" v-bind:class="{'active': index == 0}"></li>
            </ol>
            <div class="carousel-inner" style="height: 600px !important;">
                <div v-bind:class="{'carousel-item': true,'active': index == 0}" v-for="(slider,index) in sliders" v-bind:key="slider.id">
                    <a :href="slider.url" v-if="!!slider.url">
                        <LazyImg class="d-block w-100" :source="'storage/'+slider.image" :alt="slider.image"></LazyImg>
                    </a>
                    <LazyImg v-else-if="!slider.url" class="d-block w-100" :source="'storage/'+slider.image" :alt="slider.image"></LazyImg>

                    <!-- <div class="container">
                        <div class="carousel-caption caption-left" >
                            <h5>¡Aprovecha nuestros combos!</h5>
                            <h2>Carnes <img src="assets/img/icono-bio.svg" class="ico-text">io</h2>
                            <p>Compra una gran variedad de tipos <br>de carnes a un excelente precio.</p>
                            <a href="#" class="btn">Comprar</a>
                        </div>

                        <div class="carousel-caption caption-left" v-if="slider.order == 'izq'">
                           <a  v-bind:href="slider.url" class="btn">Comprar</a>
                        </div>

                         <div class="carousel-caption caption-right" v-if="slider.order == 'der'">
                           <a  v-bind:href="slider.url"  class="btn">Comprar</a>
                        </div>
                    </div> -->
                </div>
            </div>
            <a class="carousel-control-prev" :href="'#'+id" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" :href="'#'+id" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
</template>
<script>
    import LazyImg from './LazyImg.vue';
    export default {
        props: {
            sliders: Array,
            id: String
        },
        components: {
            LazyImg
        },
        mounted() {
            console.log("this.sliders::> ",this.sliders);
        }
    }
</script>