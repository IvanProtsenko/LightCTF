@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($tasks as $task)
            <div class="card mb-5">
                <div class="card-header bg-info text-white">Task {{$task->id}}</div>

                <div class="card-body">

                    <h2>{{$task->name}}</h2>
                    <h4>{{$task->text}}</h4>

                    @if($user->tasks->contains($task))
                        Вы решили задачу правильно и заработали {{$task->price}} баллов!
                        <script>
                            var card = document.getElementsByClassName("card-body");
                            card[{{ $task->id-1}}].className += " bg-success";
                        </script>
                    @else
                    <form method = post action="/home/add_solution/{{$task->id}}">
                        @csrf
                        <br><h5>Ответ:</h5>
                        <input type="text" class="form-control" name="flag"><br>
                        <input type="submit" class = "btn btn-primary">
                    </form>

                        @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
