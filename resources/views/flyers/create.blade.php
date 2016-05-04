

@extends('layout')

@section('content')
    <h1>Sell Your Home</h1>

        <form enctype="multipart/form-data" method="POST" action="/flyers">

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @include('flyers.form')

        </form>
@stop