<?php

namespace App\Http\Controllers;

use App\Http\Requests\IncidentRequest;
use Illuminate\Http\Request;
use App\Models\Incident;

class IncidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incidents = Incident::with('users')->orderByDesc('id')->take(8)->get();
        return view('incidents.index', compact('incidents'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IncidentRequest $request)
    {
        $incident = Incident::create([
            'nomIncident' => request('nomIncident'),
            'heureIncident' => request('heureIncident'),
            'heureRetourNormal' => request('heureRetourNormal'),
            'observation' => request('observation'),
            'dateIncident' => request('dateIncident'),
            'user_id' => auth()->id(),
        ]);
        return redirect()->route('incidents.index')->with('success', 'Votre declaration à bien été enregistrer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function updateTime($id)
    {
        $incident = Incident::findOrFail($id);
        return view('incidents.updateTime', compact('incident'));
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

        $incident = Incident::findOrFail($id);
        $incident->heureRetourNormal = $request->heureRetourNormal;
        $incident->save();

        return redirect()->route('incidents.index')->with('success', 'modification effectuée avec succès.');
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
}
