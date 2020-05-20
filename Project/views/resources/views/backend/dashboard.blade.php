@extends('layout')

@section('title', 'Dashboard')
@section('mainjs')
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
@endsection
@section('content')
    <div class="row mt-5">
        <div class="col">
            <h3 align="center">Simple Login System in Laravel</h3><br/>

            @if(isset(Auth::user()->email))
                <div class="alert alert-danger success-block">
                    <strong>Welcome {{ Auth::user()->email }}</strong>
                    <br/>
                    <a href="{{ url('/main/logout') }}">Logout</a>
                </div>
            @else
                <script>window.location = "/main";</script>
            @endif
        </div>
        <div class="col">
            @include('backend.components.comment', ['some' => 'data', 'blockName' => 'New comments'])
        </div>
    </div>
@endsection
