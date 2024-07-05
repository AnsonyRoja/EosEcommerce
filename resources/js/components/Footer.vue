<template>

    <section id="combos" class="hero" :style="{backgroundImage: background, backgroundSize: 'contain'}">
		<div class="container hero-container">
			<!-- <div class="hero-content">
				<h2>LLÉVATE</h2>
				<h3>uno de nuestros <a href="#">COMBOS bio <img src="assets/img/boton-circular-bio.svg"></a></h3>
				<h4>¡Con un <b>excelente precio</b>!</h4>
			</div> -->
		</div>
	</section>
</template>
<script>
export default {
    data() {
        return {
            background: ''
        }
    },
    methods: {
        getFoot: async function() {
            this.background = 'url(storage/'+this.ads[0].image+')';
        },
    },
    mounted() {
        this.getFoot();
    },
    props: {
        ads: Array
    }
}
</script>