@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <img class="rounded-circle" 
            width="150" 
            src="{{url('/images/profile.jpg')}}" alt="">
        </div>

        <div class="col-md-8">
            <div class="card"> 
                <strong>Hello {{$user->name}}</strong>
                <span><strong>0</strong></string> posts</span>
                <div class="pt-3">Hello! This is my profile</div>
            </div>
        </div>
    </div>
</div>
@endsection
