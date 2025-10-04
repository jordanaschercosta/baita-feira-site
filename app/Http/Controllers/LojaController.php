<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Loja;

class LojaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $lojas = Loja::all();
        return view('lojas.index', compact('lojas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('lojas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            Loja::create([
                'nome'=> $request->nome,
                'telefone' => $request->telefone,
                'endereco' => $request->endereco,
                'user_id' => 8,
                'instagram' => $request->instagram
            ]);

        return redirect()->route('lojas.index');
        //
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    } 

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
    //      $request->validate([
    //     'name' => 'required',
    //     'email' => 'required|email|unique:users,email,'.$user->id,
    // ]);

        $user->update($request->all());

        return redirect()->route('users.index');
        //
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }   
}
