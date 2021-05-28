<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;

class TestController extends Controller
{
    private function validationRules(){

        return [

            'team1' => 'required|string|min:3|max:255',
            'team2' => 'required|string|min:3|max:255',
            'point1' => 'required|integer|min:0|max:100',
            'point2' => 'required|integer|min:0|max:100',
            'result' => 'required|boolean',
        ];
    }

    public function home(){

        $matches = Match::all();

        return view('pages.home', compact('matches'));
    }


    public function show($id){

        $match = Match::FindOrFail($id);

        return view('pages.show', compact('match'));
    }


    public function newMatch(){

        return view('pages.create');
    }
    public function store(Request $request){

        $validata = $request -> validate($this -> validationRules());


        $match = Match::create($validata);

        return redirect() -> route('show', $match -> id);
    }


    public function edit($id){

        $match = Match::FindOrFail($id);

        return view('pages.update', compact('match'));
    }
    public function myUpDate(Request $request, $id){

        $validate = $request -> validate($this -> validationRules());

        $match = Match::FindOrFail($id);
        $match -> update($validate);

        return redirect() -> route('show', $match -> id);
    }


    public function destroy($id){

        $match = Match::FindOrFail($id);

        $match -> delete();

        return redirect() -> route('home');
    }
}
