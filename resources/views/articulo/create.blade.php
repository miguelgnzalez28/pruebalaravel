@extends('layouts.plantillabase');

@section('contenido')
<h2>CREAR REGISTROS</h2>

<form action="/articulos" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">CODIGO</label>
        <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">DESCRIPCION</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">CANTIDAD</label>
        <input id="cantidad" name="cantidad" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">PRECIO</label>
        <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control">
    </div>
    <a href="/articulos" class="btn btn-secondary" tabindex="5">CANCELAR</a>
    <button type="submit" class="btn btn-primary" tabindex="4">GUARDAR</button>
</form>
@endsection