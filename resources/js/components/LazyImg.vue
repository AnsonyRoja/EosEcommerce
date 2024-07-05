<template>
	<div v-lazyload>
		<img
	      class="image__item"
	      :data-url="source"
	      alt="random image"
	    >
	</div>
</template>
<script>
	export default {
	  	name: "LazyImg",
	  	props: {
	    	source: {
	      		type: String,
	      		required: true
	    	}
	  	}
	}
</script>