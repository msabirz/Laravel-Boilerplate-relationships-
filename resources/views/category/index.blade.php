@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @foreach($categories as $category)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div class="card-title"><h3>{{ $category->title }}</h3></div>
            <div class="card-text">
                Created By: <b>{{ $category->user->name }}</b><br />
                Created At: {{ $category->created_at->diffForHumans() }}
            </div>
            <div class="pull-right">
            <form action="{{ url('/category/delete', ['id' => $category->id]) }}" method="post">
                <input class="btn btn-default" type="submit" value="Delete" />
                {!! method_field('delete') !!}
                {!! csrf_field() !!}
            </form>
            </div>
        </div>
    </div>
    @endforeach
    </div>
</div>
@endsection