<?php

// Importing necessary namespaces and models


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\heroes;


class heroesController extends Controller
{

    // Retrieve and returns all hero records from the database table
    public function index()
    {
        $heroes = heroes::all();

        return view('heroes.index')->with('heroes', $heroes);
    }

    // Displays a page to create a new hero record
    public function create()
    {
        return view('heroes.create');
    }

    // Stores a newly created hero record into the database table
    public function store(Request $request)
    {
        $input = $request->all();
        heroes::create($input);
        return redirect('heroes')->with('flash_message', 'Heroe Added!');
    }

    // Displays a hero record based on its unique ID
    public function show($id)
    {
        $heroe = heroes::find($id);
        return view('heroes.show')->with('heroe', $heroe);
    }

    // Displays a page to edit an existing hero record selected based on its unique ID
    public function edit($id)
    {
        $heroe = heroes::find($id);
        return view('heroes.edit')->with('heroe', $heroe);
    }

    //Updates an existing hero record selected based on its unique ID with new information received through a form input
    public function update(Request $request, $id)
    {
        $heroe = heroes::find($id);
        $input = $request->all();
        $heroe->update($input);
        return redirect('heroes')->with('flash_message', 'Heroe Updated!');
    }

   //Deletes an existing hero record selected based on its unique ID from the database table
    public function destroy($id)
    {
        heroes::destroy($id);
        return redirect('heroes')->with('flash_message', 'Heroe deleted!');
    }
}

