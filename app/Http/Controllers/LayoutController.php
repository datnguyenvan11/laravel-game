<?php

namespace App\Http\Controllers;

use App\Account;
use App\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LayoutController extends Controller
{
    public function layout(){
        return view('home');
    }
    public function postform(Request $request){
        $data=[
            'name'=>$request->name,
            'ma'=>$request->ma,
            'theloai'=>$request->theloai,
            'gia'=>$request->gia,
        ];
        $game=new Game();
        $game->name=$request->name;
        $game->ma=$request->ma;
        $game->theloai=$request->theloai;
        $game->gia=$request->gia;
        $game->save();
        return view('home',$data);
    }
}
