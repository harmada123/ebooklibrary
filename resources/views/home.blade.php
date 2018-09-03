@extends('layouts.admin')
@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif


    <div class="panel panel-default">
        <div class="panel-heading">
            Hi {{Auth::user()->name}}, you are logged in!
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">

        </div>
    </div>

@endsection
