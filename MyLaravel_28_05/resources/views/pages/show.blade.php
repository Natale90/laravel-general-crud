@extends('layouts.main-layout')

@section('sectionShow')
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h3>
                    @if (!$match -> result)

                        <u>Team 1: {{ $match -> team1 }}</u> /
                        Team2: {{ $match -> team2 }}
                    @else

                        Team 1: {{ $match -> team1 }} /
                        <u>Team2: {{ $match -> team2 }}</u>
                    @endif
                </h3>

                <p>
                    Point: {{ $match -> point1 }} / Point: {{ $match -> point2 }}
                </p>

                <p>
                    Result: {{ $match -> result }}
                </p>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-12">
                <a class="btn btn-primary" href="{{ route('home') }}">
                    Bring me back home
                </a>
            </div>
        </div>
    </div>
@endsection
