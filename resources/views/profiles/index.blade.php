@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-3 p-5">
                    <img src="/svg/github.png" width="200px" height="200px" alt="">
            </div>
            <div class="col-9 p-5">
                <div class=" d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username}}</h1>
                    <a href="#">Add new post</a>
                </div>
                <div  class="d-flex">
                    <div class="p-2"><strong>153</strong> posts</div>
                    <div class="p-2"><strong>23K</strong>followers </div>
                    <div class="p-2"><strong>212</strong> following</div>
                </div>
                <div class="pt-4">
                     <strong>{{$user->profile->title}}</strong>
                </div>
                <div>
                    {{$user->profile->description}}
                </div>
                <div> <a href="#">{{$user->profile->url }}</a></div>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-4 ">
                    <img src="/img/img1.png" class="w-100" alt="">
            </div>
            <div class="col-4">
                <img src="/img/img1.png" class="w-100" alt="">
            </div>
            <div class="col-4">
                <img src="/img/img1.png" class="w-100" alt="">
            </div>
        </div>
</div>
@endsection
