<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PermissionRequest;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('permissions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermissionRequest $request)
    {

        $permission = Permission::create([

            'objet' => request('objet'),
            'motif' => request('motif'),
            'dateDepart' => request('dateDepart'),
            'dateFin' => request('dateFin'),
            'heureDepart' => request('heureDepart'),
            'heureFin' => request('heureFin'),
            'superviseur' => request('superviseur'),
            'user_id' => auth()->id(),
        ]);


        return redirect()->route('permissions.index')->with('success', 'Votre demande de permission  a bien été envoyé et est en cours de traitement');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // if (Auth::check()) {
        //     $userId = Auth::id();
        //     # code...
        // }

        $permissions = Permission::where('user_id', $id)->get();

        return view('permissions.show', compact('permissions'));
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
        $permission = Permission::findOrFail($id);
        $permission->statut = $request->statut;
        $permission->save();


        return redirect()->route('demande')->with('success', 'Vous avez mis a jour le statut de la demande de permission avec succès.');

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

    public function detail($id)
    {
        if (Auth::check()) {
            $userId = Auth::id();
        } else {
            //
        }

        $permission = Permission::findOrFail($id);
        return view('permissions.detail', compact('permission'));
    }
}
