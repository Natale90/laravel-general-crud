@extends('layouts.main-layout')

@section('sectionHome')
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2>
                    Welcome home
                </h2>

                <h4>
                    Legue
                </h4>

                <ul>
                    @foreach ($matches as $match)
                        <li class="mt-3">
                            <a href=" {{ route('show', $match -> id) }} ">
                                {{ $match -> team1 }}/{{$match -> team2}}
                            </a>

                            <a class="ml-3" href="{{ route('edit', $match -> id) }}">
                                <i class="far fa-edit"></i>
                            </a>

                            <a class="ml-1" href="{{ route('destroy', $match -> id) }}">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-12">
                <a class="btn btn-primary" href="{{ route('create') }}">
                    Create new Match
                </a>
            </div>
        </div>
    </div>
@endsection
