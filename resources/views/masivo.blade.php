@extends('voyager::master')


@section('page_header')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
    <div class="container-fluid">
        <h1 class="page-title">
Enviar correo masivo
    </div>
@stop


@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
              
                    <textarea class="form-control richTextBox" name="" id="richtext">
    
</textarea>
<div class="center" style="text-align:center"><button onclick="enviar()" id="btnEnviar" class="btn btn-success btn-lg">Enviar</button></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Single delete modal --}}
    <div class="modal modal-success fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Enviado correctamente.</h4>
                </div>
                <div class="modal-body">
                    La información suministrada se está enviado a los usuarios suscritos.<br>Puede cerrar el panel administrador si lo desea, nuestro servicio esta haciendo el trabajo automáticamente.
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop


@section('javascript')
<script>


var formData = new FormData();
post('ultimo_correo_masivo',formData);
        function modal(){
            $('#delete_modal').modal('show');
        }
        function btnCargando(){
btnEnviar.innerHTML="Enviando...";
btnEnviar.disabled=true;
        }
        function enviar(){
            btnCargando();
            var formData = new FormData();
            
            formData.append('texto',btoa(tinyMCE.activeEditor.getContent()));
            post("enviar_correo_masivo",formData);

        }
       
        function post(evento,datai) {
    //var datai = new FormData(document.getElementById(idFormulario));
    
    datai.append("evento", evento);


     var host=window.location.host;
     var protocol=window.location.protocol;
     var xmlhttp = new XMLHttpRequest();
     let data=new Map();
     data['success']=false;
     data['msj_general']="Intente mas tarde";
     xmlhttp.onreadystatechange = function() {
         if (xmlhttp.readyState == XMLHttpRequest.DONE) {   // XMLHttpRequest.DONE == 4
            if (xmlhttp.status == 200 || xmlhttp.status == 409) {
               
               procesar(xmlhttp.responseText,evento);
            
            }else {
             procesar(data,evento);
            }
         }
     };
     
     xmlhttp.open("POST", protocol+"//"+host+"/api_rapida.php", true);

      xmlhttp.send(datai);
 }






function procesar(data,evento){
    
    switch(evento){
    case 'enviar_correo_masivo':
        modal();
        console.log(data);
    break;
    case 'ultimo_correo_masivo':
        console.log(data);
        var a=JSON.parse(data)['data'][0]['text'];
        var f=document.getElementById('richtext');
        tinymce.activeEditor.setContent(a);
        
    break;
    }

}
</script>
@stop