@extends('layouts.base')
@section('title', 'Create a new Cinema')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-success">Create a new Housing Project</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mx-3">
            <a href="{{ route('housingProyect.index') }}" class="btn btn-danger">Back</a>
        </div>
    </div>
    <form class="row shadow m-3 p-3" method="post" action="{{route('housingProyect.store')}}">
        @csrf
        <div class="col-md-6 mt-2">
            <label for="housingProyect_nombre" class="form-label">Nombre de proyecto</label>
            <input type="text" class="form-control" id="housingProyect_nombre" name="nombre" placeholder="nombre proyecto" value="{{old("nombre")}}">
        </div>
        <div class="col-md-6 mt-2">
            <label for="housingProyect_constructor" class="form-label">Constructora</label>
            <input type="text" class="form-control" id="housingProyect_constructor" name="constructora" placeholder="constructor" value="{{old("constructora")}}">
        </div>
        <div class="col-md-6 mt-2">
            <label for="housingProyect_department" class="form-label">Departamento</label>
            <input type="text" class="form-control" id="housingProyect_department" name="departamento" placeholder="department" value="{{old("departamento")}}">
        </div>
        <div class="col-md-6 mt-2">
            <label for="housingProyect_city" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="housingProyect_city" name="ciudad" placeholder="city" value="{{old("ciudad")}}">
        </div>
        <div class="col-md-6 mt-2">
            <label for="housingProyect_address" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="housingProyect_address" name="direccion" placeholder="address" value="{{old("direccion")}}">
        </div>
        <div class="col-md-6 mt-2">
            <label for="housingProyect_type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="housingProyect_type" name="tipo" placeholder="type" value="{{old("tipo")}}">
        </div>
        <div class="col-md-6 mt-2">
            <label for="housingProyect_size" class="form-label">Tamaño</label>
            <input type="text" class="form-control" id="housingProyect_size" name="tamaño" placeholder="size" value="{{old("tamaño")}}">
        </div>
        <div class="col-md-6 mt-2">
            <label for="housingProyect_rooms" class="form-label">Habitaciones</label>
            <input type="text" class="form-control" id="housingProyect_rooms" name="habitaciones" placeholder="rooms" value="{{old("habitaciones")}}">
        </div>
        <div class="col-md-6 mt-2">
            <label for="housingProyect_bathrooms" class="form-label">Baños</label>
            <input type="text" class="form-control" id="housingProyect_bathrooms" name="baños" placeholder="bathrooms" value="{{old("baños")}}">
        </div>
        <div class="col-md-6 mt-2">
            <label for="housingProyect_parking" class="form-label">Parqueaderos</label>
            <input type="text" class="form-control" id="housingProyect_parking" name="parqueaderos" placeholder="parking" value="{{old("parqueaderos")}}">
        </div>
        <div class="col-md-6 mt-2">
            <label for="housingProyect_value" class="form-label">Valor</label>
            <input type="text" class="form-control" id="housingProyect_value" name="valor" placeholder="value" value="{{old("valor")}}">
        </div>
        <div class="col-12 mt-2">
            <a href="{{ route('housingProyect.index') }}" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar Proyecto de Vivienda</button>
            @if($errors->any())
            <div class="col-12 mt-2">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif

        </div>
    </form>
</div>
@endsection