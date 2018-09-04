@extends('layouts.admin')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        </div>
        <div class="panel panel-default">
            {!! Form::open(['action'=>'ManageBookController@store','method'=>'POST','files' => true]) !!}
                <div class="form-group">
                    {!! Form::label('title','Book Title') !!}
                    {!! Form::text('title',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email','Author') !!}
                    {!! Form::text('author',null,['class'=>'form-control','placeholder'=>'First Name/ Middle Initial/ Last Name']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('isbn','ISBN') !!}
                    {!! Form::text('isbn',null,['class'=>'form-control', 'placeholder'=>'eg. 978-0-956158*-*-*']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('description','Description') !!}
                    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('book_id','Ebook:') !!}
                    {!! Form::file('book_id',['class'=>'btn']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Upload Book',['class'=>'btn btn-success']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection()
