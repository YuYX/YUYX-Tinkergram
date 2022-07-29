@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 
                <strong>Hello {{$user->name}}</strong>
            </div>
        </div>
    </div>
</div>
@endsection
