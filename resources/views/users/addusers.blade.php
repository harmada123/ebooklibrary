@extends('layouts.admin')
@section('content')
    {!! Form::open(['action'=>'ManageUserController@store','method'=>'POST','files' => true]) !!}
        <div class="form-group">
            {!! Form::label('name','Full Name') !!}
            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'First Name/ Middle Initial/ Last Name']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email','Email') !!}
            {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'email@pic.edu.ph']) !!}
        </div>
        <div class="form-group">
            {{Form::label('role_id','Job Role:')}}
            <br>
            {{Form::select('role_id',array('Choose Options') + $role,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {!! Form::label('password','Password:') !!}
            {!! Form::password('password',['class'=> 'form-control' ]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id','Photo:') !!}
            {!! Form::file('photo_id',['class'=>'btn']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create User',['class'=>'btn btn-success']) !!}
        </div>

    {!! Form::close() !!}
@endsection