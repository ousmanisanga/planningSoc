<?php

namespace App\Http\Controllers;


use App\Models\Permutation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PermutationRequest;

class PermutationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('permutations.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permutations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermutationRequest $request)
    {
        $permutation = Permutation::create([
            'objet' => request('objet'),
            'motif' => request('motif'),
            'superviseurRemplacant' => request('superviseurRemplacant'),
            'datePermutation' => request('datePermutation'),
            'user_id' => auth()->id(),
            'superviseur' => request('superviseur'),
            'heureDebut' => request('heureDebut'),
            'heureFin' => request('heureFin'),
        ]);



        return redirect()->route('permutations.index')->with('success', 'votre demande de permutation a bien été envoyé et est en cours de traitement');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         // Récupérer l'ID de l'utilisateur connecté
         if (Auth::check()) {
            $userId = Auth::id();
            // Utilisez $userId comme nécessaire
        } else {
                // L'utilisateur n'est pas connecté
        }

        $permutations = Permutation::where('user_id', $userId)->get();
        return view('permutations.show', compact('permutations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $permutation = Permutation::findOrFail($id);
        $permutation->statut = $request->statut;
        $permutation->save();

        return redirect()->route('arrangement')->with('success', 'Vous avez mis a jour le statut de la demande de permutation avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function detail($id){
        if (Auth::check()) {
            $userId = Auth::id();
            // Utilisez $userId comme nécessaire
        } else {
                // L'utilisateur n'est pas connecté
        }
        $permutation = Permutation::findOrFail($id);
        return view('permutations.detail', compact('permutation'));



    }
}
