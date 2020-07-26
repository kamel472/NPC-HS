<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stats;

class StatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)


    {

        
        if ($request->date ){

            $date = $request->date;
            $stats = Stats::where('date' , $date)->get();

        }
        else
        {

            $date = date('m/Y');
            $stats = Stats::where('date' , $date)->get();
            
        }

        return view('stats.index' , compact('stats' , 'date'  ));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('stats.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $allStats = Stats::all();
        $sumTraining = $allStats->sum('training') + $request->training ;
        $sumInspections = $allStats->sum('inspections') + $request->inspections;
        $sumObservations = $allStats->sum('observations') + $request->observations;
        $sumMeetings = $allStats->sum('meetings') + $request->meetings;
        $sumDrills = $allStats->sum('drills') + $request->drills;
        $sumFatalities = $allStats->sum('fatalities') + $request->fatalities;
        $sumLostTime = $allStats->sum('lostTime') + $request->lostTime;
        $sumDamage = $allStats->sum('damage') + $request->damage;
        $sumFire = $allStats->sum('fire') + $request->fire;
        $sumNearMiss = $allStats->sum('nearMiss') + $request->nearMiss;
        $sumFirstAid = $allStats->sum('firstAid') + $request->firstAid;
       
        $stats = Stats::create([
            'training'=> $request->training , 'sumTraining'=> $sumTraining, 'inspections'=>$request->inspections ,
            'sumInspections'=> $sumInspections,'observations'=>$request->observations , 'sumObservations'=> $sumObservations,
            'meetings'=> $request->meetings , 'sumMeetings'=> $sumMeetings, 'drills'=>$request->drills ,  
            'sumDrills'=> $sumDrills,'fatalities'=>$request->fatalities , 'sumFatalities'=> $sumFatalities,
            'lostTime'=>$request->lostTime ,'sumLostTime'=> $sumLostTime,'damage'=>$request->damage ,  
            'sumDamage'=> $sumDamage,'fire'=>$request->fire, 'sumFire'=> $sumFire,
            'nearMiss'=>$request->nearMiss , 'sumNearMiss'=> $sumNearMiss, 'firstAid'=> $request->firstAid,
            'sumFirstAid'=> $sumFirstAid, 'date'=>$request->date
            
        ]);

         return redirect('/stats');
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
