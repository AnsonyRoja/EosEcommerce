@component('mail::message')

<h1>¡Bienvenido a Biomercados!</h1>
<p>Para verificar tu email, por favor haz click en el botón</p>
<p>
	<a href="{{$link}}" class="btn btn-primary button">Verificar</a>
</p>
<p>ó sigue este enlace: </p>
<p>
	<a href="{{$link}}">{{$link}}</a>
</p>

<sub>Gracias</sub>
<br>
<sub>El equipo de Biomercados</sub>



@endcomponent
