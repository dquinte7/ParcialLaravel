@extends('layouts.base')
@Section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-info" role="alert">HousingProject</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            @foreach ($housingProyects as $housingProyect)
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $housingProyect->nombre }}</h5>
                    <p class="card-text">
                        <span class="fw-bold">Constructora:</span>
                        {{ $housingProyect->constructora }}
                    </p>
                    <p class="card-text">
                        <span class="fw-bold">Departamento:</span>
                        {{ $housingProyect->departamento }}
                    </p>
                    <p class="card-text">
                        <span class="fw-bold">Ciudad:</span>
                        {{ $housingProyect->ciudad }}
                    </p>
                    <p class="card-text">
                        <span class="fw-bold">Dirección:</span>
                        {{ $housingProyect->direccion }}
                    </p>
                    <p class="card-text">
                        <span class="fw-bold">Tipo:</span>
                        {{ $housingProyect->tipo }}
                    </p>
                    <p class="card-text">
                        <span class="fw-bold">Tamaño:</span>
                        {{ $housingProyect->tamaño }}
                    </p>
                    <p class="card-text">
                        <span class="fw-bold">Habitaciones:</span>
                        {{ $housingProyect->habitaciones }}
                    </p>
                    <p class="card-text">
                        <span class="fw-bold">Baños:</span>
                        {{ $housingProyect->baños }}
                    </p>
                    <p class="card-text">
                        <span class="fw-bold">Parqueaderos:</span>
                        {{ $housingProyect->parqueaderos }}
                    </p>
                    <p class="card-text">
                        <span class="fw-bold">Valor:</span>
                        {{ $housingProyect->valor }}
                    </p>
                </div>
                <div class="d-flex" style="width: 18rem;">
                    <a type="btn btn-warning" class="btn btn-primary"
                        href="{{route('housingProyect.edit', $housingProyect)}}">Edit</a>
                    <a class="btn btn-warning "
                        href="{{route('housingProyect.show', $housingProyect)}}">Detail</a>
                    <form action="{{route('housingProyect.destroy', $housingProyect)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Está seguro de eliminar la infoción?')">
                            Delete
                        </button>
                    </form>
                </div>

                @endforeach
            </div>
        </div>

        <div class="row">
            <div class="col-12">

            </div>
            <div class="col-12 mx-3">
                <a href="{{ route('housingProyect.create') }}" class="btn btn-success">Create</a>
            </div>
        </div>
    </div>
    @endsection