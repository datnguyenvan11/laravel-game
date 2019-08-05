<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Contracts\Session\Session;
use Illuminate\Database\Eloquent\Concerns\GuardsAttributes;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $game=Game::latest()->paginate(5);
        return view('home')->with(['game'=>$game]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Game::create($request->all());

        return redirect('/game')
            ->with('success', 'Game created successfully.');  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game =Game::find($id);
        if ($game == null){
            return view('error.404');
        }
        return view('home')->with('game',$game);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        return view('edit')->with('game', $game);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function update(Request $request, Game $game)
    {
        $game->update($request->all());
        return redirect()->route('/game')
            ->with('success', 'Game updated successfully');
    }*/
    public function update(Request $request, $id)
    {
        $obj = Game::find($id);
        $obj->name = $request->get('name');
        $obj->ma = $request->get('ma');
        $obj->theloai = $request->get('theloai');
        $obj->gia = $request->get('gia');
        $obj->save();
        return redirect('/game');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        Game::destroy($game->id);
        return redirect('/game');
    }

   }

