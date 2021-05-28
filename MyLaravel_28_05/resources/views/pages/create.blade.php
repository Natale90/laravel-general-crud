@extends('layouts.main-layout')

@section('sectionCreate')
    <div class="container">
        <div class="row text-center">
            <div class="col-12">


                <form class="" action="{{ route('store') }}" method="POST">

                    @csrf
                    @method('POST');

                    <div class="">
                        <label for="team1">Team 1:</label>
                        <input id="team1" type="text" name="team1" value="">
                    </div>

                    <div class="">
                        <label for="team2">team 2:</label>
                        <input id="team2" type="text" name="team2" value="">
                    </div>

                    <div class="">
                        <label for="point1">Point Team 1:</label>
                        <input id="point1" type="number" name="point1" value="">
                    </div>

                    <div class="">
                        <label for="point2">Point team 2:</label>
                        <input  id="point2" type="number" name="point2" value="">
                    </div>

                    <div class="">
                        <label for="result">Result:</label>
                        <select id="result"  name="result" value="">
                            <option value="0">Team1</option>
                            <option value="1">team2</option>
                        </select>
                    </div>


                    <button class="btn btn-primary" type="submit" name="button">
                        Add New Match
                    </button>
                </form>

            </div>
        </div>
    </div>
@endsection
