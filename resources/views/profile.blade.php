@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <img class="rounded-circle" 
            width="150" 
            src="/storage/{{ $profile->image }}" alt="">
        </div>

        <div class="col-md-8">
            <div class="card"> 
                <strong>Hello {{$user->name}}</strong>
                <span><strong>0</strong> posts</span>
                <div class="pt-3">{{ $profile->description }}</div>
            </div>
        </div>
    </div>
</div>
@endsection
