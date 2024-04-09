@extends('layouts.base')
@Section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-info" role="alert">HousingProject</h1>
        </div>
    </div>

    <div class="container mt-4">
    <div class="row">
        @foreach ($housingProyects as $housingProyect)
        <div class="col-lg-4 mb-4">
            <div class="card">
                <img src="https://galias.com.co/wp-content/uploads/2023/12/Zona-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $housingProyect->nombre }}</h5>
                    <p class="card-text">
                        <span class="fw-bold">Constructora:</span> {{ $housingProyect->constructora }}
                    </p>
                    <p class="card-text">
                        <span class="fw-bold">Departamento:</span> {{ $housingProyect->departamento }}
                    </p>
                    <p class="card-text">
                        <span class="fw-bold">Ciudad:</span> {{ $housingProyect->ciudad }}
                    </p>
                    <p class="card-text">
                        <span class="fw-bold">Dirección:</span> {{ $housingProyect->direccion }}
                    </p>
                    <p class="card-text">
                        <span class="fw-bold">Tipo:</span> {{ $housingProyect->tipo }}
                    </p>
                    <p class="card-text">
                        <span class="fw-bold">Tamaño:</span> {{ $housingProyect->tamaño }}
                    </p>
                    <p class="card-text">
                        <span class="fw-bold">Habitaciones:</span> {{ $housingProyect->habitaciones }}
                    </p>
                    <p class="card-text">
                        <span class="fw-bold">Baños:</span> {{ $housingProyect->baños }}
                    </p>
                    <p class="card-text">
                        <span class="fw-bold">Parqueaderos:</span> {{ $housingProyect->parqueaderos }}
                    </p>
                    <p class="card-text">
                        <span class="fw-bold">Valor:</span> {{ $housingProyect->valor }}
                    </p>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="{{ route('housingProyect.edit', $housingProyect) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('housingProyect.show', $housingProyect) }}" class="btn btn-warning">Detail</a>
                        <form action="{{ route('housingProyect.destroy', $housingProyect) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Está seguro de eliminar la información?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <a href="{{ route('housingProyect.create') }}" class="btn btn-success">Create</a>
        </div>
    </div>
</div>
    @endsection