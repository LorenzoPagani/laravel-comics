@extends('app')

@section('content')
    <div class="jumbo">
        <img class="w-100" src="assets\images\jumbotron.jpg" alt="jumbotron">
    </div>
    <div class="comics-wrapper">
        <div class="container">
            <div class="row justify-between">
                @foreach ($comics as $comic)
                    <div class="comic-card">
                        <img class="w-100" src="{{ $comic['thumb'] }}" alt="">
                        <h6>{{ $comic['title'] }}</h6>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
