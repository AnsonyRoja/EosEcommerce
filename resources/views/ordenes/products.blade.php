<!-- resources/views/ordenes/productos.blade.php -->

@section('content')
    <h1>Productos de la Orden #{{ $orden->id }}</h1>
    <ul>
        @foreach ($productos as $producto)
            <li>{{ $producto->nombre }} - {{ $producto->precio }}</li> <!-- Ajusta según la estructura de tu modelo Producto -->
        @endforeach
    </ul>
@endsection
