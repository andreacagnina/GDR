<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Models\Type;
use App\Models\Item;

use function PHPSTORM_META\type;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Character::all();
        $types = Type::all();
        $items = Item::all();
        return view('characters.index', compact('characters', 'types', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Character $character, Type $type)
    {
        // in realta essendo un offcanvas questo è inutile, bastano quelli nell'index.
        $types = Type::all();
        $items = Item::all();

        return view('characters.create', compact('types', 'items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCharacterRequest $request)
    {
        $form_data = $request->validated();
        $character = Character::create($form_data);

        if($request->has('items')){

            $items = $request->items;
            $character->items()->attach($items);
        }

        return redirect()->route('characters.index')->with('success', ucwords($character->name) . " si è unito alla battaglia.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Character $character)
    {
        return view('characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Character $character)
    {
        $types = Type::all();
        $items = Item::all();

        return view('characters.edit', compact('character', 'types','items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCharacterRequest $request, Character $character)
    {
        $form_data = $request->validated();
        $character->update($form_data);

        if($request->has('items')){
            $character->items()->sync($request->items);
        }
        else{
            $character->items()->sync([]);
        }

        return redirect()->route('characters.index', ['character' => $character->id])->with('success', "Al personaggio " . ucwords($character->name) . " sono stati cambiati i connotati.");;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character)
    {

        $character->delete();

        return redirect()->route('characters.index')->with('success', ucwords($character->name) . " non fa più parte della tua squadra.");
    }
}
