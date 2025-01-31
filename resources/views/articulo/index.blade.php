@extends('layouts.plantillabase');

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css">
@endsection

@section('contenido')
        <a href="articulos/create" class="btn btn-primary mb-3">CREAR</a>
        <table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articulos as $articulo)
                    <tr>
                        <td>{{$articulo->id}}</td>
                        <td>{{$articulo->codigo}}</td>
                        <td>{{$articulo->descripcion}}</td>
                        <td>{{$articulo->cantidad}}</td>
                        <td>{{$articulo->precio}}</td>
                        <td>
                            <form action="{{ route ('articulos.destroy',$articulo->id)}}" method="POST">
                            <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>

<script>
    new DataTable('#articulos');
</script>
@endsection

@endsection