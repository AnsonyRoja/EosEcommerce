var urlBaseImagen="storage/";
var categoriaActual=null;
var filtroPreIni=0;
var filtroPreFin=50;
var precioMin=0;
var precioMax=50;
var palabrasClaves="";
var arrPalabrasClaves=[];
var islogin=false;
get("web_no_login");
verificarSesion();
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
function verificarSesion(){
    var usuario=getLocal('usuario');
    if(usuario!=null){
        islogin=true;
        divTopMenuUser.innerHTML=divMenuLogin();
        console.log(usuario);
        return true;
        
      
    }else{
        islogin=false;
        console.log("no esta logueado");
        return false;
        
    }
}
function logout(){
    get('logout');
}

function get(evento,variables="") {
    //alert(variables);
     //alert(url);
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
    
     xmlhttp.open("GET", protocol+"//"+host+"/api_rapida.php?evento="+evento+variables, true);
      xmlhttp.send();
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
    case 'web_no_login':
   console.log(data);
    var data = JSON.parse(JXG.decompress(data));

        if(data.success==true){
            var datos=data.data;
            for (var [key, value] of Object.entries(datos)) {
                setLocal(key, value);
            }
            console.log(data);
            cambiarPagina('inicio');

        }

        break;
        case 'registrarUsuario':
            var data = JSON.parse(data);
            if(data.success){
                alert("Registrado exitosamente!");
            }else{
                alert(data.msj_general);
                return false;
            }
        break;
        case 'loginNuevo':
            var data = JSON.parse(JXG.decompress(data));
            if(data.success){
                var datos=data.data;
                for (var [key, value] of Object.entries(datos)) {
                    setLocal(key, value);
                }
                console.log(data);
                alert(data.msj_general);
                location.reload();
                return true;
            }else{
                alert(data.msj_general);
                return false;
            }
        case 'logout':
            alert("Vuelve pronto");
            delLocal('usuario');
            location.reload();
        break;
        case 'actualizarPerfil':
            var data = JSON.parse(data);
            if(data.success){
                alert("Su perfil ha sido actualizado");
                return false;
            }else{
                alert(data.msj_general);
                return false;
            }
        break;
        
    }

}

function setLocal(key,value){
    localStorage.setItem(key, JSON.stringify(value));
}
function getLocal(key){
    return JSON.parse(localStorage.getItem(key));
}
function delLocal(key){
    localStorage.removeItem(key);
}

function listarPublicidad(){
    data=getLocal('listarPublicidadToda');
    console.log(data);
    
    ht='';
    var carrousel=document.getElementById("imagenesCarrousel");
    var tipo='active';
    data['data'].forEach(element => {
        if(element.type=="top"){
        ht+='<div class="carousel-item '+tipo+'"><img class="d-block w-100" src="storage/'+element.image+'" alt="First slide"></div>';
        tipo=''
        }
    });
    carrousel.innerHTML=ht;
}








function cambiarPagina(nombre,tipo,imagen){
    //alert(window.location.hash);
    arrPalabrasClaves=[];
    cerrarFormLogin();
    switch(nombre){
        case 'categorias':
            //arrPalabrasClaves=[];
        
            categoriaActual=tipo;
            contenido.innerHTML="<div class='container-fluid'><div class='row'><img width='100%' src='"+urlBaseImagen+imagen+"'></div><div class='row mar'><div class='col-md-3'>"+divIzq()+"</div><div class='col-md-9'>"+divDer()+"</div></div></div>";
            divPalabrasClaves();
            //publicidad('pubA','izq_producto_a');
            //publicidad('pubB','izq_producto_b');
            //publicidad('pubC','izq_producto_c');
            //publicidad('pubD','izq_producto_d');
            multiRangoData();
            
        break;
        case 'favoritos':
            

        break;
        case 'registro':
            imagenTop='img/topRegistroUsuario.jpg';
            contenido.innerHTML="<div class='container-fluid'><div class='row'><img width='100%' src='"+imagenTop+"'></div><div class='row mar2'><div class='col-md-6'>"+divRegistroIzq()+"</div><div class='col-md-6' id='cuadroRegistro'>"+divRegistroDer()+"</div></div></div>";
            nroCedulaRegistro.focus();
        break;
        case 'panel_usuario':
           
            contenido.innerHTML="<div class='topGeneral align-middle' ><span class=''>Mi cuenta</span></div><div class='container-fluid'><div class='row justify-content-md-center'><div class='col-2'>"+divPanelUsuarioIzq()+"</div><div class='col-6'>"+divPanelUsuarioDer()+"<br><br></div></div></div>"; 

        break;
        default:

            contenido.innerHTML=paginaPrincipal();
            listarCombos();
            listar_categorias_movil_4();
            productos_home();
            listar_categorias_movil_menu();

            
        break;
    }
    
}
function divPanelUsuarioIzq(){
    var d=getLocal('usuario')['data'];
    var h='';
    h+='<div class="row"><div class="col center"><img src="img/ico_perfil.png" width="110"></div></div>'+
    '<div class="row "><div class="col center h4 rojo text-capitalize">'+d['name']+'</div></div>'+
    '<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">'+
  '<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Datos personales</a>'+
  '<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Mis direcciones</a>'+
  '<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Mis pedidos</a>'+
  '<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Mis favoritos</a>'+
'</div><br><br><br>'+
    '';
    return h;
}
function divPanelUsuarioDer(){
    var h='';
    h+='<div class="tab-content" id="v-pills-tabContent">'+
    '<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">'+divEditUser()+'</div>'+
    '<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>'+
    '<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>'+
    '<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>'+
  '</div>'+
    '';
    return h;
}
function divEditUser(){
    var h='<nav>'+
    '<div class="nav nav-tabs" id="nav-tab" role="tablist">'+
     '<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Datos personales</a>'+
      '<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Seguridad</a>'+
      
    '</div>'+
  '</nav>'+
  '<div class="tab-content" id="nav-tabContent">'+
    '<div class="tab-pane fade show active espacioFormulario" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" >'+formUsuario()+'</div>'+
    '<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>'+
    
  '</div>'+
  '';
  return h;
}
function divDirecciones(){
    var h='<nav>'+
    '<div class="nav nav-tabs" id="nav-tab" role="tablist">'+
     '<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Datos personales</a>'+
      '<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Seguridad</a>'+
      '<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>'+
    '</div>'+
  '</nav>'+
  '<div class="tab-content" id="nav-tabContent">'+
    '<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>'+
    '<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>'+
    '<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>'+
  '</div>'+
  '';
  return h;
}
function divPedidos(){
    var h='<nav>'+
    '<div class="nav nav-tabs" id="nav-tab" role="tablist">'+
     '<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Datos personales</a>'+
      '<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Seguridad</a>'+
      '<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>'+
    '</div>'+
  '</nav>'+
  '<div class="tab-content" id="nav-tabContent">'+
    '<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>'+
    '<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>'+
    '<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>'+
  '</div>'+
  '';
  return h;
}
function divFavoritos(){
    var h='<nav>'+
    '<div class="nav nav-tabs" id="nav-tab" role="tablist">'+
     '<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Datos personales</a>'+
      '<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Seguridad</a>'+
      '<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>'+
    '</div>'+
  '</nav>'+
  '<div class="tab-content" id="nav-tabContent">'+
    '<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>'+
    '<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>'+
    '<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>'+
  '</div>'+
  '';
  return h;
}
function divRegistroIzq(){
    var h='<br>'+
    '<div class="row" id="ti_registro"><div class="col-md-12"><span>Beneficios de ser usuario de<span></div></div>'+
    '<div class="row" id="ti_registrob"><div class="col-md-12"><span>bio mercados<span></div></div>'+
    '<div class="row registro_item"><div class="col-md-1"><img src="img/check.png"></div><div class="col-md-11"><span>Tendrás acceso a nuestra tienda virtual y nuestras aplicaciones móviles con una sola cuenta.</span></div></div>'+
    '<div class="row registro_item"><div class="col-md-1"><img src="img/check.png"></div><div class="col-md-11"><span>Podrás acumular y canjear tus puntos bio por productos y ahorrar dinero en las compras.</span></div></div>'+
    '<div class="row registro_item"><div class="col-md-1"><img src="img/check.png"></div><div class="col-md-11"><span>Obtendrás grandes descuentos, promociones y más en los precios de nuestros productos y cambios bio.</span></div></div>'+
    '<div class="row registro_item"><div class="col-md-1"><img src="img/check.png"></div><div class="col-md-11"><span>Podrás realizar una compra sin salir de tu hogar y recibir los productos en la puerta de tu casa u oficina.</span></div></div><br><br>';


    return h;
}
function divRegistroDer(){
 var h='<div class="row" id="rowSexo"><div class="col-md-3">Seleccione Sexo:</div><div class="col-md-3"> <input class="form" required type="radio" name="sexo" value="m"> Hombre</div><div class="col-md-3"> <input required type="radio" name="sexo" value="f"> Mujer</div></div>'+
 '<div><label>Rif. o Nro. de cedula:</label>'+
    '<div class="input-group">'+
        '<div class="input-group-prepend">'+
            '<select id="selectCedula"><option>V</option><option>J</option><option>G</option><option>E</option></select>'+
        '</div>'+
        '<input pattern="^[0-9]+$" maxlength="11" required id="nroCedulaRegistro" type="text" class="form-control">'+
    '</div>'+
'</div>'+
'<div class="row">'+
'<div class="col-md-12"><label>Nombre y apellido: </label><input id="re_name" maxlength="100" required type="text" class="form-control"></div>'+
'</div>'+
 '<div><label>Fecha de nacimiento: </label><input id="re_fecha" required type="date" class="form-control"></div>'+
 '<div class="row">'+
 '<div class="col-md-6"><label>Correo Electrónico:      </label><input id="re_email" maxlength="100" required type="text" class="form-control"></div><div class="col-md-6"><label>Teléfono:    </label><input id="re_tel" required pattern="^[0-9\-]+$" type="text" title="Ejemplo: 0414-5138790" class="form-control"></div>'+
 '</div>'+
 '<div class="row">'+
 '<div class="col-md-6"><label>Contraseña:          </label><input id="conf_clave" required type="password" class="form-control"></div><div class="col-md-6"><label>Repita su contraseña:    </label><input id="re_clave" required type="password" class="form-control"></div>'+
 '</div><br>'+
 '<div><input type="checkbox" class="messageCheckbox" id="terminos" onclick="activarBotonRegistro(this)"> Acepto los términos y condiciones.</div>'+
 '<div><input type="checkbox">  Deseo recibir notificaciones de productos, ofertas y promociones al correo electrónico.</div>'+
 '<div class="center" ><button id="btnRegistro" disabled class="btn btn-success">Crear cuenta</button></div>';




 return '<form id="formRegistro" autocomplete="off" onSubmit="return registrarUsuario()">'+h+'</form>';

}
function formUsuario(){
    var u=getLocal('usuario')['data'];
var fecha=u['birthdate'];

    var h='<br><div class="row" id="rowSexo"><div class="col-md-3">Seleccione Sexo:</div><div class="col-md-3"> <input '+(u['sex']=='m' ? 'checked' : '')+' class="form" required type="radio" name="sexo" value="m"> Hombre</div><div class="col-md-3"> <input '+(u['sex']=='f' ? 'checked' : '')+'  required type="radio" name="sexo" value="f"> Mujer</div></div>'+
    '<div><label>Rif. o Nro. de cedula:</label>'+
     
           '<input readonly pattern="^[0-9]+$" maxlength="11" value="'+u['rif']+'"  required id="nroCedulaRegistro" type="text" class="form-control">'+
      
   '</div>'+
   '<div class="row">'+
   '<div class="col-md-12"><label>Nombre y apellido: </label><input value="'+u['name']+'" id="re_name" maxlength="100" required type="text" class="form-control"></div>'+
   '</div>'+
    '<div><label>Fecha de nacimiento: </label><input value="'+fecha+'" id="re_fecha" required type="date" class="form-control"></div>'+
   '<br>'+
    
    
    '<div class="center" ><button id="btnRegistro" disabled class="btn btn-success">Guardar</button></div>';
   
   
   
   
    return '<form id="formEditUser" autocomplete="off" onSubmit="return guardarUsuario()">'+h+'</form>';
   
   }
function activarBotonRegistro(a){
    
    val=document.querySelector('.messageCheckbox').checked;
  
    if(val){
        btnRegistro.disabled=false;
    }else{
        btnRegistro.disabled=true;
    }
}

function formatearFecha(fecha){
    const date = new Date(fecha)
const dateTimeFormat = new Intl.DateTimeFormat('en', { year: 'numeric', month: 'numeric', day: '2-digit' }) 
const [{ value: month },,{ value: day },,{ value: year }] = dateTimeFormat .formatToParts(date ) 

return `${day}/${month}/${year }`;
}


  function login(){
 
    get('loginNuevo',"&email="+email.value+"&password="+password.value+"&web=1");
  }
 function guardarUsuario(){  
        var radios = document.getElementsByName('sexo');
        for (var i = 0, length = radios.length; i < length; i++) {
          if (radios[i].checked) {
            // do whatever you want with the checked radio
            var sex=radios[i].value;
        
            // only one radio can be logically checked, don't check the rest
            break;
          }
        }


//console.log(rif+" "+name+" "+email+" "+fecha+" "+clave+" "+tel+" "+sex);
var formData = new FormData();
formData.append('sex',sex);
formData.append('name',re_name.value);
formData.append('email',re_email.value);
formData.append('birthdate',re_fecha.value);
formData.append('password',clave);
formData.append('tlf',re_tel.value);

post('actualizarPerfil',formData);
 }
function registrarUsuario(){
    if(re_clave.value==conf_clave.value){
     
        var nacio=selectCedula.value;
        var nroCedu=nroCedulaRegistro.value;
        var rif=nacio+"-"+nroCedu;
        var name=re_name.value;
        var email=re_email.value;
        var fecha=re_fecha.value;
        var clave=re_clave.value;
        var tel=re_tel.value;

        var radios = document.getElementsByName('sexo');

        for (var i = 0, length = radios.length; i < length; i++) {
          if (radios[i].checked) {
            // do whatever you want with the checked radio
            var sex=radios[i].value;
        
            // only one radio can be logically checked, don't check the rest
            break;
          }
        }


//console.log(rif+" "+name+" "+email+" "+fecha+" "+clave+" "+tel+" "+sex);
var formData = new FormData();
formData.append('sex',sex);
formData.append('name',name);
formData.append('rif',rif);
formData.append('email',email);
formData.append('birthdate',fecha);
formData.append('password',clave);
formData.append('tlf',tel);

post('registrarUsuario',formData);

        //try{
       // $.post("api_rapida.php", {sex:sex,name: name,rif:rif,email:email,birthdate:fecha,password:clave,tlf:tel}, function(result,statusText, xhr){
           // var status = xhr.status; 
           // alert(status);
         // console.log(result);
      //  });
   // }catch(e){
        //alert(e);
    //}
    }else{
        alert("Sus contraseñas no coinciden.");
    }
    return false;
}
function divIzq(){
    return divFiltro()+divPublicidad();
}
function divPublicidad(){
    var h='<div class="row row_filtro_izq">'+publicidad('pubA','izq_producto_a')+'</div>'+
    '<div class="row row_filtro_izq">'+publicidad('pubB','izq_producto_b')+'</div>'+
    '<div class="row row_filtro_izq">'+publicidad('pubC','izq_producto_c')+'</div>'+
    '<div class="row row_filtro_izq">'+publicidad('pubD','izq_producto_d')+'</div>';


    return h;
}
function divDer(){
    ht='';
    
    data=procesarProductos('recientes');
    var i=0;
    var total=0;
    datos.forEach(element => {
        i++;
        total++;
        ht+=cajaProductosHorizontal(element,'12');
     }); 
     a=divTopFiltro(i,total);
    return a+'<div id="DerHorizontalPro">'+ht+'</div>';
}
function cambiarDataFiltroHorizontal(tipo){
    var i=0;
    var total=0;
    data=procesarProductos(tipo);
    
    datos.forEach(element => {
        i++;
        total++;
        ht+=cajaProductosHorizontal(element,'12');
     }); 
     DerHorizontalPro.innerHTML=ht;
}
function divPalabrasClaves(){
    d=document.getElementById('div_palabras_claves');
    d.innerHTML=' ';//div_palabras_claves en div
    for( let a in palabrasClaves ){
        if(palabrasClaves[a]!=''){
        d.innerHTML+=' <span onclick="fitrarPalabraClave(this)">'+palabrasClaves[a]+'</span>';
        }     
      };
      //return  g;
    
}
function fitrarPalabraClave(a){
    var arr;
    console.log(a.innerHTML);
    name='hashtag_active';

   
    arr = a.className.split(" ");
    if (arr.indexOf(name) == -1) {
      a.className += " " + name;
      arrPalabrasClaves.push(a.innerHTML);
    }else{
        a.classList.remove(name);
        removeItemOnce(arrPalabrasClaves, a.innerHTML) 
        
    }



console.log(arrPalabrasClaves);




  cambiarDataFiltroHorizontal(selectOrganizar.value);
    
}
function addoremoveclass(element,name) {
    var arr;
    arr = element.className.split(" ");
    if (arr.indexOf(name) == -1) {
      element.className += " " + name;
    }else{
        element.classList.remove("hashtag_active");
        
    }
  }




function removeItemOnce(arr, value) {  //remover array
    var index = arr.indexOf(value);
    if (index > -1) {
        arr.splice(index, 1);
    }
    return arr;
}

function removeItemAll(arr, value) { //remover todas la coincidencias
    var i = 0;
    while (i < arr.length) {
        if(arr[i] === value) {
            arr.splice(i, 1);
        } else {
            ++i;
        }
    }
    return arr;
}





function fitrarRango(){
var tipo="";
    precioMin=minRango.value;
    precioMax=maxRango.value;
    tipo=selectOrganizar.value;
    cambiarDataFiltroHorizontal(tipo);

    //alert(value);
}
function multiRango(){
    var html='<div class="row rowMultiRangoInputs">'+
  
      '<div class="col-6"><input id="minRango" onchange="fitrarRango()"  type="number" class="js-input-from form-control" v-model="min_price" /></div>'+
      '<div class="col-6"><input id="maxRango" onchange="fitrarRango()"  type="number" class="js-input-to form-control" v-model="max_price" /></div>'+
  
'</div>';
return html;
}
function inputRango(){
    return '<input type="text" class="js-range-slider" name="my_range" value="" />';
}
function divFiltro(){

   // var checkOfertas='<div class="titulo_filtro_izq_span"><input type="radio" id="check_reciente"> <span>Más recientes</span></div>';

//<div class="col-6"><input id="minRango" onchange="fitrarRango()" max="49" min="0" type="number" class="form-control" value="'+filtroPreIni+'"></div><div class="col-6"><input id="maxRango" onchange="fitrarRango()" max="50" min="1" type="number" value="'+filtroPreFin+'" class="form-control"></div>



    var html='<div class="row row_filtro_izq"><div class="col-12 tituloFiltroIzqPrincipal"><img src="img/ico_filtro.png"> Filtrado por:</div></div>'+
    '<div class="row"><div class="col-12 tituloFiltroIzq">Precio $:</div></div>'+
    inputRango()+''+multiRango()+''+
    //'<div class="row"><div class="col-12 tituloFiltroIzq">Ofertas:'+checkOfertas+'</div></div>'+
    '<div class="row mt-3"><div class="col-12 tituloFiltroIzq">Por etiquetas:</div><div class="row" ><div class="col-12" id="div_palabras_claves"></div></div></div>'
    ;
    return html;
}
function divTopFiltro(cant,total){
    return '<div class="row" id="topFiltro"><div class="col-md-8 justify-content-center align-self-center">Mostrando <span id="cantMostrandoFiltro">'+cant+'</span> de <span id="cantTotalFiltro">'+total+'</span> productos</div><div class="col-md-4">'+cuadroOrganizar()+'</div></div>';
}
function cuadroOrganizar(){
    var options='<option value="recientes">Más recientes</option>'+
    '<option value="mas_vendido">Mas vendidos</option>'+
    '<option value="precio">Mejores precios</option>'+
    '<option value="a_z" >Orden alfabético A-Z</option>'+
    '<option value="z_a" >Orden alfabético Z-A</option>';
    return 'Organizar por: '+'<select id="selectOrganizar" onchange="cambiarDataFiltroHorizontal(this.value)" id="optionOrganizar">'+options+'</select>';
}
function listarCombos(){
    ht='';
    data=getLocal('listarCombos'); 
    var div_listarCombos=document.getElementById("listarCombos");
    data['data'].forEach(element => {
        var preD=formatD(element.total_precio_dolar);
        var preB=formatB(element.total_precio);
        divPrecioBolivar='<div class="monto">'+preB+'</div>';
        divPrecioDolar='<div class="monto">'+preD+'</div>';
        ht+='<div class="col-md-3"><div><img class="img_combo" src="'+urlBaseImagen+element.image_web+'"></div><div class="name_combo">'+element.name+'</div>'+divPrecioBolivar+divPrecioDolar+'</div>';
    }); 
    div_listarCombos.innerHTML=ht;
    console.log(data);
}
function productos_homeb(){ //ELIMINAR
   listarProductos('pro_mejor_precio',"div_productos_home")
}

function listarProductosb(tipo,div){
    ht='';
    data=getLocal('productos'); 
    dataTipo=getLocal(tipo); 
    var div=document.getElementById(div);
    
    for( let a in dataTipo ){
        
      ht+=cajaProductos(data[a]);
        
    };

    div.innerHTML=ht;
    //console.log(data);
}

function cambiar_listado_productos_home(tipo,a){
    listarProductos(tipo,"div_productos_home");
    a_recientes.classList.remove("btnactive");
    a_mas_vendido.classList.remove("btnactive");
    a_precio.classList.remove("btnactive");
    a_a_z.classList.remove("btnactive");
    a_z_a.classList.remove("btnactive");
    a.classList.add("btnactive");
}
function productos_home(){
    listarProductos('recientes',"div_productos_home");
}

function listarProductos(tipo,div){

    data=procesarProductos(tipo);
   
    data.forEach(element => { //decia datos noc porque
      ht+=cajaProductos(element);
   }); 
   var div=document.getElementById(div);
   div.innerHTML=ht;
    console.log(datos);
}

function procesarProductos(tipo){

    ht='';
    data=getLocal('productos'); 
    datos=data['data'];
    if(arrPalabrasClaves.length>0){
        datos = datos.filter(function(element) {
    
            for( let a in arrPalabrasClaves ){
               
                    var ss=arrPalabrasClaves[a];
                    exp = new RegExp(''+ss+''); 

                     if(exp.test(element.keyword)){
                         return 1;
                     }
                  
            };    


            return 0;


           
   
    
          });      
    }
    if(categoriaActual!=null){
        datos = datos.filter(element => JSON.parse(element.json_subcategories)[0].c ==categoriaActual);
        cargarPalabrasClaves(datos);
        
    }
    datos = datos.filter(function(element) {
        //alert(element.price+" > min: "+precioMin+" "+element.price+" and < max: "+precioMax);
        return (element.total_precio_dolar>precioMin && element.total_precio_dolar<precioMax);

      });
    switch(tipo){
        
        case 'rango':
            
            datos = datos.filter(function(element) {
                //alert(element.price+" > min: "+precioMin+" "+element.price+" and < max: "+precioMax);
                return (element.total_precio_dolar>precioMin && element.total_precio_dolar<precioMax);

              });
        break;
        case 'precio':
            datos.sort((a, b) => a.price - b.price);
        break;
        case 'a_z':
            datos.sort((a, b) => a.name.localeCompare(b.name));
        break;
        case 'z_a':
            datos.sort((a, b) => b.name.localeCompare(a.name));
        break;
        case 'recientes':
            datos.sort((a, b) => a.id - b.id);
        break;
        case 'mas_vendido':
            datos.sort((a, b) => b.qty_sold - a.qty_sold);
        break;
    }
    
    return datos;
}
function onlyUnique(value, index, self) { 
    return self.indexOf(value) === index;
}

function cargarPalabrasClaves(datos){
    var todo='';
    datos.forEach(element => {
        if(element.keyword!=null){
            
            todo+=element.keyword+" ";
        }

    }); 
    todo=todo.replace(/\s+/g,' ');
    var t=todo.trim().split(" ").filter( onlyUnique );
    console.log(t);
    palabrasClaves = t;

    
}
function cajaProductos(element,tamano='2'){
    var htm='';
    var preD=formatD(element.total_precio_dolar);
    var preB=formatB(element.total_precio);
    disponible='<div class="monto">('+element.qty_avaliable+' Disponibles)</div>';
    divPrecioBolivar='<div class="monto">'+preB+'</div>';
    divPrecioDolar='<div class="monto">'+preD+'</div>';
    htm+='<div class="col-md-'+tamano+' caja_producto"><div class="cajaImagenProducto"><img width="200px" src="'+urlBaseImagen+element.image+'"></div><div class="name_combo">'+element.name+'</div>'+disponible+divPrecioBolivar+divPrecioDolar+'</div>';
    return htm;
}
function cajaProductosHorizontal(element,tamano='9'){
    var htm='';
    var preD=formatD(element.total_precio_dolar);
    var preB=formatB(element.total_precio);
    disponible='<div class="texto_dere">Disponibles: '+element.qty_avaliable+' en Stock</div>';
    cantidad_carrito='<div class="texto_dere">Cantidad: <span>0</span> en Carrito</div>';
    btnAgregar='<div class="texto_dere button_agregar"><a><img class="ml-1 mr-1" src="/img/carrito.png" width="18" alt="Carrito">Añadir al carrito</a></div>';
    btnAgregarFavorito='<div class="texto_dere "><a ><img class="ml-2 mr-1" src="/img/favorito.png" width="15" alt="Favoritos"> Añadir a favoritos</a></div>';
    btnVerProducto='<div class="texto_dere"><a ><img class="ml-2 mr-1" src="/img/ico_buscar.png" width="18" alt="Buscar"> Ver producto</a></div>';
    divPrecioBolivar='<div class="monto">'+preB+'</div>';
    divPrecioDolar='<div class="monto">'+preD+'</div>';
    htm+='<div class="cajaHorizontalProductos col-md-'+tamano+' "><div class="row"><div class="col-md-3 col-4"><img src="'+urlBaseImagen+element.image+'"></div><div class="col-md-6 col-3 justify-content-center align-self-center"><div class="name_combo">'+element.name+'</div>'+divPrecioBolivar+divPrecioDolar+'</div><div class="col-5 col-md-3 cajitaAgregarHorizontal">'+disponible+cantidad_carrito+btnAgregar+btnAgregarFavorito+btnVerProducto+'</div></div></div>';
    return htm;
}


function listar_categorias_movil_4(){
    var i=0;
    ht='';
    data=getLocal('listar_categorias_movil'); 
    var div_listar_categorias_movil_4=document.getElementById("listar_categorias_movil_4");
    data['data'].forEach(element => {
        if(i<4){
        ht+='<div class="col-md-3"><img class="img_categoria_4" src="'+urlBaseImagen+element.image_grande+'"></div>';
        }
        i++;
    }); 
    div_listar_categorias_movil_4.innerHTML=ht;
    console.log(data);
    
}
function listar_categorias_movil_menu(){
    var i=0;
    hy='';
    ht='';
    conoce='';
 cierraD='</div></li>';
 conoce+='<a class="dropdown-item" href="#">Cultura bio</a>';
 conoce+='<a class="dropdown-item" href="#">Sucursales</a>';
 conoce+='<a class="dropdown-item" href="#">Proveedores</a>';
 conoce+='<a class="dropdown-item" href="#">Contacto</a>';
    datab=getLocal('listar_categorias_movil'); 
    var ULmenuCategorias=document.getElementById("ulmenuCategorias");
    ht+='<li class="nav-item active"><a class="nav-link" id="pagina_inicio_link" onclick="cambiarPagina(\'inicio\')">Inicio <span class="sr-only">(current)</span></a></li>';
   datab['data'].forEach(element => {
        if(i<6){
            //alert(element.name);
        ht+='<li class="nav-item"><a class="nav-link" href="#cate_'+element.id+'" onclick="cambiarPagina(\'categorias\','+element.id+',\''+element.image_b+'\')">'+element.name+' <span class="sr-only">(current)</span></a></li>';
     
        }else{
        hy+='<a class="dropdown-item" href="#cate_'+element.id+'" onclick="cambiarPagina(\'categorias\','+element.id+',\''+element.image_b+'\')">'+element.name+'</a>';
        }
        
        i++;
    }); 
    ht+=abreD('Mas categorias',"navbarDropdownA")+hy+cierraD;
    ht+=abreD('Conoce a bio mercados',"navbarDropdownB")+conoce+cierraD;
    ULmenuCategorias.innerHTML=ht;
    console.log(data);
    
}
function abreD(titulo,id){
    aabreD='<li class="nav-item dropdown">'+
    '<a class="nav-link dropdown-toggle" href="#" id="'+id+'" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
      titulo+
    '</a>'+
   '<div class="dropdown-menu" aria-labelledby="'+id+'">';
   return aabreD;
}
function publicidad(id,type){
    data=getLocal('listarPublicidadToda');
    var tipo='active';
    ht='';
var ht='<div id="carouselExampleControls_'+id+'" class="carousel slide" data-ride="carousel">'+
    '<div class="carousel-inner" id="'+id+'">';


   
    data['data'].forEach(element => {
        if(element.type==type){
        ht+='<div class="carousel-item '+tipo+'"><img  class="d-block w-100" src="storage/'+element.image+'" alt="First slide"></div>';
        tipo=''
        }
    });




    ht+='</div>'+
    '<a class="carousel-control-prev" href="#carouselExampleControls_'+id+'" role="button" data-slide="prev">'+
      '<span class="carousel-control-prev-icon" aria-hidden="true"></span>'+
      '<span class="sr-only">Atras</span>'+
    '</a>'+
    '<a class="carousel-control-next" href="#carouselExampleControls_'+id+'" role="button" data-slide="next">'+
      '<span class="carousel-control-next-icon" aria-hidden="true"></span>'+
     '<span class="sr-only">Siguiente</span>'+
    '</a>'+
  '</div>';



    return ht;

}

function abrirLogin(){
    m=document.getElementById('menuLogin');
    e=document.getElementById('email');
    if(m){
    if(m.style.display=='block'){
       
        m.style.display="none";
    }else{
       
        m.style.display="block";
        e.focus();
    }
}
}
function cerrarFormLogin(){
    m=document.getElementById('menuLogin');
    if(m){
        m.style.display="none";
    }
    
    
}
function divMenuLogin(){
    var d=getLocal('usuario')['data'];
    var h='';
    h='<div class="col-4" onclick="cambiarPagina(\'panel_usuario\')" id="divLoginCuadro" data-toggle="tooltip" data-placement="bottom" title="Mi cuenta"><img src="/assets/img/icono-perfil-bio.png"> <span>'+Truancate(d['name'], 20)+'</span></div>'+
    '<div class="col" onclick="logout()" data-toggle="tooltip" data-placement="bottom" title="Cerrar sesión"><img src="img/salir.png" height="42" alt="Login" style="cursor:pointer"></div>'+
                  '<div class="col po" data-toggle="tooltip" data-placement="bottom" title="Carrito de compras" style="text-align: left"><img src="/img/carrito.png" height="40" alt="Carrito"></div>'+
                   '<div class="col po" data-toggle="tooltip" data-placement="bottom" title="Mis favoritos" style="padding-right: 0px;"><img src="/img/favorito.png" height="40" alt="Favoritos"></div>';
    return h;

}
function divMiPerfil(){

}
function Truancate(txt, limit) {
    
    if (txt.length > limit) {
      let newText = txt.substr(0, limit) + ' ...';
      return newText;
      
    }else{
        return txt;
    }
  }
function paginaPrincipal(){
    categoriaActual=null;
    var todo=publicidad('imagenesCarrousel','top')+'<div class="container-fluid">'+

    
'<br>'+
  '<div class="row">'+
    '<div class="col-md-12 tituloPrincipal">'+
      'Mi Compra Fácil'+
    '</div>'+
  '</div>'+
 '</div>'+

  '<div class="row mar" id="listarCombos">'+
    
  '</div>'+
  '<div class="row mar" id="listar_categorias_movil_4">'+
    
  '</div>'+publicidad('listar_publicidad_medio','medio_bajo')+

  '<div class="container-fluid">'+
  '<div class="row">'+
    '<div class="col-md-12 tituloPrincipal">'+
    'Nuestros productos'+
    '</div>'+
  '</div>'+
  '<div class="row" id="div_btn_filtros_home">'+
    '<div class="mx-auto">'+
    '<a id="a_recientes" class="btn button btnactive" onclick="cambiar_listado_productos_home(\'recientes\',this)"><span>Más recientes </span></a>'+
    '<a id="a_mas_vendido" class="btn button" onclick="cambiar_listado_productos_home(\'mas_vendido\',this)"><span>Mas vendidos </span></a>'+
    '<a id="a_precio" class="btn button" onclick="cambiar_listado_productos_home(\'precio\',this)"><span>Mejores precios</span></a>'+
    '<a id="a_a_z" class="btn button" onclick="cambiar_listado_productos_home(\'a_z\',this)"><span>Orden alfabético A-Z </span></a>'+
    '<a id="a_z_a" class="btn button" onclick="cambiar_listado_productos_home(\'z_a\',this)"><span>Orden alfabético Z-A </span></a>'+
  '</div>'+
  '</div>'+
  '<div class="row mar" id="div_productos_home">'+
    

  '</div>'+



  '</div>'+publicidad('listar_publicidad_final','footer');
  return todo;
}



function formatB(amount){
    return formatMoney(amount,2, ",", ".")+" Bs";
}
function formatD(amount){
    return "$"+formatMoney(amount,2, ".", ",");
}
function formatMoney(amount, decimalCount = 2, decimal = ".", thousands = ",") {
    try {
      decimalCount = Math.abs(decimalCount);
      decimalCount = isNaN(decimalCount) ? 2 : decimalCount;
  
      const negativeSign = amount < 0 ? "-" : "";
  
      let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
      let j = (i.length > 3) ? i.length % 3 : 0;
  
      return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
    } catch (e) {
      console.log(e)
    }
}

  function multiRangoData(){
    var $range = $(".js-range-slider");
    var $inputFrom = $(".js-input-from");
    var $inputTo = $(".js-input-to");
    var instance;
    var min = 0;
    var max = 50;
    var from = 0;
    var to = 50;

    $range.ionRangeSlider({
        skin: "round",
        type: "double",
        min: min,
        max: max,
        from: from,
        to: to,
        prefix: "$",
        onStart: updateInputs,
        onChange: updateInputs,
        onFinish: updateInputsB
    });
    instance = $range.data("ionRangeSlider");

    function updateInputsB (data) {
        fitrarRango();
        updateInputs (data);
    }

    function updateInputs (data) {
       
        from = data.from;
        to = data.to;
        min_range = data.from;
        max_range = data.to;


        $inputFrom.val(from);
        $inputTo.val(to);

        $('.js-input-from')[0].dispatchEvent(new CustomEvent('input'));
        $('.js-input-to')[0].dispatchEvent(new CustomEvent('input'));
    }

    $inputFrom.on("change", function () {
        var val = $(this).val();

        // validate
        if (val < min) {
            val = min;
        } else if (val > to) {
            val = to;
        }

        instance.update({
            from: val
        });

        $(this).val(val);
    });

    $inputTo.on("change", function () {
        var val = $(this).val();

        // validate
        if (val < from) {
            val = from;
        } else if (val > max) {
            val = max;
        }

        instance.update({
            to: val
        });

        $(this).val(val);

    });
    
  
  }