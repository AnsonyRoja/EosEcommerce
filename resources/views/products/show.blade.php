@extends('voyager::master')

@section('content')
    <div class="container">
        <h1>Detalles del Producto</h1>
        @isset($product)
            <ul>
                <li>ID: {{ $product->id }}</li>
                <li>Descripción: {{ $product->description }}</li>
                <li>Descripción Corta: {{ $product->description_short }}</li>
                <li>Precio: {{ $product->price }}</li>
                <!-- Agrega aquí más propiedades del producto según sea necesario -->
            </ul>
        @else
            <p>El producto no fue encontrado.</p>
        @endisset
    </div>
@endsection
