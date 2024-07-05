@extends('voyager::master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-bordered">
                        <div class="panel-heading">
                            <h3 class="panel-title">Opiniones</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Rating</th>
                                            <th>Opinión</th>
                                            <th>Producto</th>
                                            <th>Usuario</th>
                                            <th>Fecha de Creación</th>
                                            <th>Última Actualización</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($opiniones as $opinion)
                                            <tr>
                                                <td>{{ $opinion->id }}</td>
                                                <td>{{ $opinion->rating }}</td>
                                                <td>{{ $opinion->opinion }}</td>
                                                <td>{{ $opinion->product->name }}</td>
                                                <td>{{ $opinion->user->name }}</td>
                                                <td>{{ $opinion->created_at->format('d/m/Y H:i') }}</td>
                                                <td>{{ $opinion->updated_at->format('d/m/Y H:i') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
