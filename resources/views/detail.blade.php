@extends('layouts.master')

@section('content')
<div class="container paddding">  
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif     
    <img src="{{asset('/uploads/'.$news->thumbnail)}}" width="100%" height="500px" alt="">
    <div class="my-3">
        <h1 class="text-primary"> {{$news->title}}</h1>
        <span class="badge badge-primary">
            <a href="/categories/{{$news->category->id}}" style="text-decoration: none;">{{$news->category->name}}</a> 
        </span>
        <hr>        
        <p>{{$news->content}}</p>
        <hr>
        
        <h3>List Komentar</h3>
        {{-- List Komentar --}}
        @forelse ($news->comments as $item)
            <div class="media">
                <img src="{{asset('/uploads/profile/'. $item->user->profile->photo_profile)}}" class="mr-3 rounded-circle" width="75px" height="75px" alt="...">
                <div class="media-body">
                    <h5 class="mt-0 text-info">{{$item->user->name}}</h5>
                    {{$item->content}}
                    @forelse ($item->replies as $item)
                        <hr>
                        <div class="media mt-3">
                            <a class="mr-3" href="#">
                                <img src="{{asset('/uploads/profile/'. $item->user->profile->photo_profile)}}" class="mr-3 rounded-circle" width="75px" height="75px" alt="...">
                            </a>
                            <div class="media-body">
                                <h5 class="mt-0">{{$item->user->name}}</h5>
                                <p>{{$item->content}}</p>
                            </div>
                        </div>
                    @empty
                        <hr>
                        <h6>tidak ada reply</h6>
                    @endforelse
                    @auth                        
                    <hr>
                    <form action="/reply/{{$item->id}}" method="post">
                        @csrf
                        <div class="form-group">
                            <textarea name="content" id="content" placeholder="Isi Komentar" class="form-control" cols="10" rows="5"></textarea>
                        </div>
                        @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="submit" class="btn btn-info btn-sm" value="Reply">
                    </form>
                    @endauth
                </div>
            </div>
        @empty
            <h6>Tidak Komentar</h6>
        @endforelse
        @auth            
        <hr>
        <form action="/comment/{{$news->id}}" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="content" id="content" placeholder="Isi Komentar" class="form-control" cols="30" rows="10"></textarea>
            </div>
            @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="submit" class="btn btn-primary btn-lg" value="kirim">
        </form>
        @endauth
        <hr>
        <a href="/" class="btn btn-lg btn-secondary">Home</a>
    </div>
</div>
@endsection
