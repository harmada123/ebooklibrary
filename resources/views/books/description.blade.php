@extends('layouts.admin')
@section('content')
    <h1 class="text-center">{{$book->title}}</h1>
    <hr>
    <div class="col-lg-6"></div>
    <div class="col-lg-4">
        <label for="">ID :{{$book->id}} </label>
        <br>
        <label for="">Title : {{$book->title}}</label>
        <br>
        <label for="">Author : {{$book->author}}</label>
        <br>
        <label for="">ISBN : {{$book->isbn}}</label>
        <br>
        <a href="{{ URL::to( '../public/ebooks/' . $book->ebook->file)  }}">Download Ebook</a>
    </div>

@endsection()