<template>
    <section id="offers" class="hero" :style="{backgroundImage: backgrounds[0]}">
		<div class="container hero-container">
			<!-- <div class="hero-content">
				<h2>GRANDES <span>Ofertas</span></h2>
				<h3>en nuestros productos de</h3>
				<a href="#">VERDURAS, FRUTAS Y HORTALIZAS <img src="assets/img/boton-circular-bio.svg"></a>
			</div> -->
		</div>
	</section>
</template>
<script>
export default {
    data() {
        return {
			backgrounds: []
        }
    },
    methods: {
		getAds: function() {
			this.backgrounds.push('url(storage/'+this.medio_bajo[0].image+')');
        }
    },
    mounted() {
        this.getAds();
    },
    props: {
        medio_bajo: Array
    }
}
</script>