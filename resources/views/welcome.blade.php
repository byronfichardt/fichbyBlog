@extends('layouts.app')

@section('content')
    <h1>Byron's Blog</h1>
    <div>
        @foreach ($posts as $key => $post)
            <div class="card m-2">
                <div class="card-body">
                    <x-post :post="$post"/>
                </div>
            </div>
        @endforeach
    <div>

@endsection
