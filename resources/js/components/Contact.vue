<template>
    <div class="register-form">
        <form action="" class="">
            <h2 class="form-title">Cont&aacute;ctanos</h2>
            <div class="form-group">
                <label for="name">Nombre y Apellido:</label>
                <input type="text" class="form-control" id="name" name="name" v-model="contact.name">
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="text" class="form-control" id="email" name="email" v-model="contact.email">
            </div>
            <div class="form-group">
                <label for="subject">Asunto:</label>
                <input type="text" class="form-control" id="subject" name="subject" v-model="contact.subject">
            </div>
            <div class="form-group">
                <label for="message">Mensaje:</label>
                <textarea class="form-control" id="message" name="message" v-model="contact.message"></textarea>
            </div>
            <div class="form-group">
                <button class="btn" type="button" @click="sendData()">Enviar</button>
            </div>
        </form>
    </div>
</template>
<script>
    export default{
        data() {
            return {
                contact:{
                    name:'',
                    email:'',
                    subject:'',
                    message:'',
                }
            }
        },
        methods: {
            sendData() {
                const dataContact = new FormData;
                dataContact.append('name',this.contact.name);
                dataContact.append('email',this.contact.email);
                dataContact.append('subject',this.contact.subject);
                dataContact.append('message',this.contact.message); 
                axios.post(URLHOME+'api_rapida.php?evento=contactweb', dataContact).then( (data) => {
                    Swal.fire("Su correo ha sido enviado con exito.");
                    //location.href=window.location.href;
                })
            }
        }
    }
</script>