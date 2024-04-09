@extends('layouts.base')
@section('title', 'View a new Cinema')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-success">View a new list Housing Project</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mx-3">
            <a href="{{ route('housingProyect.index') }}" class="btn btn-danger">Back</a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-success">Nombre: {{ $housingProyect->nombre}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-3">
                <a href="{{ route('housingProyect.index') }}" class="btn btn-danger">Volver al listado</a>
            </div>
        </div>
        <div class="row shadow m-3 p-3">
            <div class="col-md-6">
                <div class="mb-2">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <span class="form-control" id="nombre">{{ $housingProyect->nombre }}</span>
                </div>
                <div class="mb-2">
                    <label for="constructora" class="form-label">Constructora:</label>
                    <span class="form-control" id="constructora">{{ $housingProyect->constructora }}</span>
                </div>
                <div class="mb-2">
                    <label for="departamento" class="form-label">Departamento:</label>
                    <span class="form-control" id="departamento">{{ $housingProyect->departamento }}</span>
                </div>
                <div class="mb-2">
                    <label for="ciudad" class="form-label">Ciudad:</label>
                    <span class="form-control" id="ciudad">{{ $housingProyect->ciudad }}</span>
                </div>
                <div class="mb-2">
                    <label for="direccion" class="form-label">Dirección:</label>
                    <span class="form-control" id="direccion">{{ $housingProyect->direccion }}</span>
                </div>
                <div class="mb-2">
                    <label for="tipo" class="form-label">Tipo:</label>
                    <span class="form-control" id="tipo">{{ $housingProyect->tipo }}</span>
                </div>
                <div class="mb-2">
                    <label for="tamaño" class="form-label">Tamaño (m²):</label>
                    <span class="form-control" id="tamaño">{{ $housingProyect->tamaño }}</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-2">
                    <label for="habitaciones" class="form-label">Habitaciones:</label>
                    <span class="form-control" id="habitaciones">{{ $housingProyect->habitaciones }}</span>
                </div>
                <div class="mb-2">
                    <label for="baños" class="form-label">Baños:</label>
                    <span class="form-control" id="baños">{{ $housingProyect->baños }}</span>
                </div>
                <div class="mb-2">
                    <label for="parqueaderos" class="form-label">Parqueaderos:</label>
                    <span class="form-control" id="parqueaderos">{{ $housingProyect->parqueaderos }}</span>
                </div>
                <div class="mb-2">
                    <label for="valor" class="form-label">Valor:</label>
                    <span class="form-control" id="valor">{{ $housingProyect->valor }}</span>
                </div>
            </div>
              
        </div>
    </div>
</div>
@endsection