@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Listing</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   <div class="container">
                        <div class="row justify-content-center">
                        @foreach($users as $user)
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <div class="card-title"><h3>{{ $user->name }}</h3></div>
                                <div class="card-text">
                                    Created At: {{ $user->created_at->diffForHumans() }}
                                </div>
                                <div class="pull-right">
                                <form action="{{ url('/user/delete', ['id' => $user->id]) }}" method="post">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
