@extends('layouts.admin')
@section('content')
    <h1 class="text-center">{{$book->title}}</h1>
    <hr>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-lg-2">
            <label for="">ID :{{$book->id}} </label>
            <br>
            <label for="">Title : {{$book->title}}</label>
            <br>
            <label for="">Author : {{$book->author}}</label>
            <br>
            <label for="">ISBN : {{$book->isbn}}</label>
            <br>

        </div>
        <div class="mx-auto col-lg-6">
            <label for="" class="h-25">Description</label>
            <br>
            <p>
                {{$book->description}}
            </p>
            <br>
            <a href="{{ URL::to( '../public/ebooks/' . $book->ebook->file)  }}">Download Ebook</a>
        </div>
    </div>



@endsection()