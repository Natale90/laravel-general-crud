@extends('layouts.main-layout')

@section('sectionUpdate')
    <div class="container">
        <div class="row text-center">
            <div class="col-12">


                <form class="" action="{{ route('update', $match -> id) }}" method="POST">

                    @csrf
                    @method('POST');

                    <div class="">
                        <label for="team1">Team 1:</label>
                        <input id="team1" type="text" name="team1" value="{{ $match -> team1 }}">
                    </div>

                    <div class="">
                        <label for="team2">team 2:</label>
                        <input id="team2" type="text" name="team2" value="{{ $match -> team2 }}">
                    </div>

                    <div class="">
                        <label for="point1">Point Team 1:</label>
                        <input id="point1" type="number" name="point1" value="{{ $match -> point1 }}">
                    </div>

                    <div class="">
                        <label for="point2">Point team 2:</label>
                        <input  id="point2" type="number" name="point2" value="{{ $match -> point2 }}">
                    </div>

                    <div class="">
                        <label for="result">Result:</label>
                        <select id="result"  name="result" value="{{ $match -> result }}">
                            <option value="0">Team1</option>
                            <option value="1">team2</option>
                        </select>
                    </div>


                    <button class="btn btn-primary" type="submit" name="">
                        Update Match
                    </button>
                </form>

            </div>
        </div>
    </div>
@endsection
