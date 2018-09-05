@extends('layouts.users')
@section('content')
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-4">
            {!! Form::model($users,['action'=>['ManageUserController@update',$users],'method'=>'PATCH','files' => true]) !!}
            <div class="form-group">
                {!! Form::label('name','Full Name') !!}
                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'First Name/ Middle Initial/ Last Name']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email','Email') !!}
                {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'email@pic.edu.ph']) !!}
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
                {!! Form::submit('Edit User',['class'=>'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        <div class="mx-auto">
            <img class="img-thumbnail" src='{{url('images',$users->photo ? $users->photo->file : 'No Photo' )}}' style="height: 250px;width: 250px;"  />
        </div>
    </div>

@endsection