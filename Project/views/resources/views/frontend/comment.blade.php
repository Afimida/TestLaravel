@extends('layout')

@section('title', 'Comments')

@section('content')
    <div class="row mt-5">
        <div class="col">
            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @include('frontend.forms.comment', ['some' => 'data', 'blockName' => 'Your comment'])
        </div>
        <div class="col">
            @include('frontend.components.comment', ['some' => 'data', 'blockName' => 'All comments'])
        </div>
    </div>
@endsection
