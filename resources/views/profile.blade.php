@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">

            <div class="card" > 
                <img class="rounded card-img-top"  
                src="/storage/{{ $profile->image }}" alt=""> 
                <img class="rounded-circle mx-auto" width="75" height="75" 
                src="/storage/{{ $profile->image }}" alt=""> 
                <div class="card-body" style="text-align: center">
                    <strong>{{$user->name}}</strong><br>
                    <span>You have <strong>{{$numPosts}}</strong> posts</span>
                    <div class="pt-3">{{ $profile->description }}</div>
                    <div class="pt-3"> 
                        <a href="/profile/edit">Edit profile</a>
                    </div>
                </div>  
            </div> 
        </div> 

        <div class="col-md-9 row pt-5">
            @foreach ($posts as $post)
            <div class="card">
                <div class="mb-5 row pt-2">
                <h5>{{ $post->caption }}</h5>
                <hr class="solid">
                    <a href="/post/{{$post->id}}">
                        <img src="/storage/{{$post->image}}" class="w-100">
                    </a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
