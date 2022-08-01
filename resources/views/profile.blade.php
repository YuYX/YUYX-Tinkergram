@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3"> 
            <div class="card" > 
                <img class="rounded card-img-top"  
                src="/storage/{{ $profile->image }}" alt=""> 
                <div class="card-image-overlay  mx-auto">
                    <img class="rounded-circle mx-auto" width="75" height="75" 
                    src="/storage/{{ $profile->image }}" alt=""> 
                </div>
                <div class="card-body" style="text-align: center">
                    <strong>{{$user->name}}</strong><br>
                    <div class="pt-3">{{ $profile->description }}</div>
                    <div class="pt-3"> 
                        <a href="/profile/edit">Edit profile</a>
                    </div>
                    <span>You have <strong>{{$numPosts}}</strong> posts</span>
                </div>  
            </div> 
        </div> 

        <div class="col-md-9">   
            <div class="row mb-5">
                <div class="card col-md-1">
                    <img class="rounded-circle mx-auto" width="40" height="40" 
                    src="/storage/{{ $profile->image }}" alt="">  
                </div>
                <div class="card col-md-11">
                    <div class="card-header">Start a post</div> 
                </div> 
            </div>

            @foreach ($posts as $post) 
            <div class="card mb-2">
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
