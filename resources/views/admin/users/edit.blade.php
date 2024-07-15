@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
@if(session('mensaje'))
    <div class="alert alert-success">
        <strong>{{session('mensaje')}}</strong>
    </div>
@endif
<div class="card">
    <div class="card-body">
        {!! Form::model($user,['route'=>['admin.users.update',$user],'method'=>'PUT']) !!}
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
            {!! Form::submit('Actualizar Usuario',['class'=>'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
</div>
    
@stop