<template>
    <div class="modal modal-order fade" id="ModalOrderRating" tabindex="-1" role="dialog" aria-labelledby="ModalOrderRatingLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="order-block">
                        <div class="row">
                            <h3 class="order-number order-text">Orden #{{order.num_order}}</h3>
                        </div>
						<div class="row">
							<div class="col-lg-6">
                                <label>Califacación</label>
                                <div class="wrapperStars">
                                    <input type="radio" id="r1" name="rg1" v-model="stars" value="1">
                                    <label for="r1">&#10038;</label>
                                    <input type="radio" id="r2" name="rg1" v-model="stars" value="2">
                                    <label for="r2">&#10038;</label>
                                    <input type="radio" id="r3" name="rg1" v-model="stars" value="3">
                                    <label for="r3">&#10038;</label>
                                    <input type="radio" id="r4" name="rg1" v-model="stars" value="4">
                                    <label for="r4">&#10038;</label>
                                    <input type="radio" id="r5" name="rg1" v-model="stars" value="5">
                                    <label for="r5">&#10038;</label>
                                </div>
							</div>
                            <div class="col-lg-6">
                                <label>Comentario</label>
                                <textarea v-model="comentario" class="form-control" placeholder="Escriba su comentario"></textarea>
                            </div>
						</div>
                        <div class="row">
                            <div class="col-lg-12">
                                <center>
                                    <button type="button" class="btn btn-submit" @click="guardar()">Guardar</button>
                                </center>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
    export default {
        data() {
            return {
                stars: 0,
                comentario: ''
			}
        },
        props: {
            order: Object
        },
        methods: {
            async guardar() {
                try {
            const url = `${URLSERVER}api_rapida.php?evento=guardarOpinionOrden&orders_id=${this.order.num_order}&opinion=${this.comentario}&user_rating=${this.stars}`;
            const response = await axios.get(url);
            console.log("Respuesta de Axios:", response);
            Swal.fire("Orden " + this.order.num_order + " calificada exitosamente");
            jQuery("#ModalOrderRating").modal('hide');
        } catch (error) {
            console.error("Error al realizar la solicitud:", error);
        }
            }
        }
        
    }
</script>