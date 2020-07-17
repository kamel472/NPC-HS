<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Observation;

class ObservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $observations = Observation::all();

        return view ('observation.index' , compact('observations'));
        
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('observation.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $observation = new Observation;
       

        $observation->title = $request->title;
        $observation->desc = $request->desc;
        $observation->source = $request->source;
        $observation->observer = $request->observer;
        $observation->recommended_corrective_action = $request->CArecommended;
        $observation->corrective_action_taken = $request->CAtaken;
        $observation->corrective_action_date = $request->date;
        $observation->status = $request->status;
        $observation->responsible_party = $request->resposible;
        $observation->priority = $request->priority;


       $observation->save();

        return redirect('observations/')->with('message' , 'observation posted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Observation $observation)
    {
        return view ('observation.show' , compact('observation'));
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
        //
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
