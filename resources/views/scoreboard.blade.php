@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($users->sortByDesc('score') as $user)

                    <div class="card mb-3">
                        <div class="card-body">
                            <h2>Name: {{$user->name}}</h2>
                            <h5>Score: {{$user->score}}</h5>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>

@endsection