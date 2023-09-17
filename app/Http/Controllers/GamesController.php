<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Games;
use Carbon\Carbon;
use Validator;
use Spatie\QueryBuilder\QueryBuilder;




class GamesController extends Controller
{
    public function store_games(Request $request) {

    $rules = array(
            'title'=>"required|unique:games,title",
            'description'=>"required",
            'release_date'=>"required|date",
            'genre'=>"required"
        );

        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
	return ["result"=>"Valid Request"];
    }

    } 
    
   

    public function destroy($id){
        return Games::destroy($id);
    }

   
    public function update(Request $request,$id)
    {
         $games=Games::find($id);
        $games->update($request->all());
        return $games;

    }
    
    }
    
