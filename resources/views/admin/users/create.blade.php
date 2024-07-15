@extends('adminlte::page')

@section('title', 'Crear nuevo usuario')

@section('content_header')
    <h1>Agregar nuevo usuario</h1>
@stop

@section('content')
    <div class="form-group">
        {!! Form::open(['route'=>'admin.users.store']) !!}
            <div class="form-group">
                {!! Form::label('name','Nombre') !!}
                {!! Form::text('name',null, ['class'=>'form-control','placeholder','Nombre del usuario']) !!}
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('email','Correo electronico') !!}
                {!! Form::text('email',null, ['class'=>'form-control','placeholder','Correo del usuario']) !!}
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('password','Contraseña') !!}
                {!! Form::password('password', ['class'=>'form-control','placeholder','Ingresa la contraseña de usuario']) !!}
                @error('password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
            {!! Form::submit('Guardar Usuario',['class'=>'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@stop