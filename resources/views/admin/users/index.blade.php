@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Usuarios</h1>
@stop

@section('content')
<h1>Esto es una prueba de un h1</h1>
<h5>Prueba de un H5, esto es otra prueba igual</h5>
    @if(session('mensaje'))
        <div class="alert alert-success">
            <strong>{{session('mensaje')}}</strong>
        </div>
    @endif
    <div class="card-head mb-3">
        <a href="{{route('admin.users.create')}}" class='btn btn-primary bg-green'>Nuevo Usuario</a>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="usuarios" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Contraseña</th>
                        <th>Controles</th>
                        <th>Prueba</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->password}}</td>
                        <td>
                            <a href="{{route('admin.users.edit',$user)}}" class='btn btn-primary bg-yellow btn-sm d-inline w-100'>Editar</a><br>
                            <form action="{{route('admin.users.destroy',$user)}}" method='POST'>
                                @method('delete')
                                @csrf
                                <input type="submit" value='Eliminar' class='btn btn-danger btn-sm w-100'>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        .bg-green {
            background-color: green;
        }
        .bg-yellow {
            background-color: yellow;
        }
    </style>
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
<script>
    new DataTable('#usuarios',{
        'language':{
            'search':'Buscar',
            'lengthMenu': 'Mostrar _MENU_ registros por página',
            'info': 'Mostrando página _PAGE_ de _PAGES_', 
            'paginate': {
                'previous':'Anterior',
                'next':'Siguiente'
            }
        }
    });
</script>
@stop