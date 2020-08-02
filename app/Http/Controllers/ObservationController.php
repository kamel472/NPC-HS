<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Observation;
use App\Http\Requests\ObservationStoreRequest;
use App\Http\Requests\ObservationUpdateRequest;
use Illuminate\Support\Facades\Gate;

class ObservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Observation $observation)
    
    {

        //$response = Gate::inspect('viewAny', $observation);


        $pendingObs = Observation::where('status' , 'لم يتم الحل');
        $ongoingObs = Observation::where('status' , 'جاري الحل');
        $closedObs = Observation::where('status' , 'تم الحل');
        $observationsFromObs = Observation::where('source' , 'ملاحظة');
        $obsFromInspection = $observations = Observation::where('source' , 'تفتيش');
        $obsFromAudit = Observation::where('source' , 'تدقيق');

        if (auth()->user()->name == 'safety_admin') {

            switch ($request->query('status')) {
                case 'pending':
                $observations = $pendingObs->where('showSafety' , 1)->get();
                return view ('observation.index' , compact('observations'));
                break;

                case 'ongoing':
                $observations = $ongoingObs->where('showSafety' , 1)->get();
                return view ('observation.index' , compact('observations'));
                break;

                case 'done':
                $observations = $closedObs->where('showSafety' , 1)->get();
                return view ('observation.index' , compact('observations'));
                break;
            }

            switch ($request->query('source')) {
                case 'observation':
                $observations =  $observationsFromObs->where('showSafety' , 1)->get();
                return view ('observation.index' , compact('observations'));
                break;

                case 'inspection':
                $observations =  $obsFromInspection->where('showSafety' , 1)->get();
                return view ('observation.index' , compact('observations'));
                break;

                case 'audit':
                $observations =$obsFromAudit->where('showSafety' , 1)->get();
                return view ('observation.index' , compact('observations'));
                break;

            }

            $observations = Observation::where('showSafety' , 1)->get();

            return view ('observation.index' , compact('observations'));

        }

        elseif (auth()->user()->name == 'chairman') {

            switch ($request->query('status')) {
                case 'pending':
                $observations = $pendingObs->where('showChairman' , 1)->get();
                return view ('observation.index' , compact('observations'));
                break;

                case 'ongoing':
                $observations = $ongoingObs->where('showChairman' , 1)->get();
                return view ('observation.index' , compact('observations'));
                break;

                case 'done':
                $observations =$closedObs->where('showChairman' , 1)->get();
                return view ('observation.index' , compact('observations'));
                break;
            }

            switch ($request->query('source')) {
                case 'observation':
                $observations =$observationsFromObs->where('showChairman' , 1)->get();
                return view ('observation.index' , compact('observations'));
                break;

                case 'inspection':
                $observations = $obsFromInspection->where('showChairman' , 1)->get();
                return view ('observation.index' , compact('observations'));
                break;

                case 'audit':
                $observations = $obsFromAudit->where('showChairman' , 1)->get();
                return view ('observation.index' , compact('observations'));
                break;
            }

            $observations = Observation::where('showChairman' , 1)->get();
            return view ('observation.index' , compact('observations'));

        }

        elseif(auth()->user()->admin == 1){

            $dep = auth()->user()->dep;
            $observations = Observation::where('responsible_area' , $dep)->
            orwhere('responsible_correction' , $dep)->get();
            return view ('observation.index' , compact('observations'));
        }

                
    }

    public function stats(){

        $observations = Observation::all();
        return view ('observation.stats' , compact('observations'));
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
    public function store(ObservationStoreRequest $request)
    {

        $observation = new Observation;
        $observation->desc = $request->desc;
        $observation->source = 'ملاحظة';
        $observation->observer = $request->observer;
        $observation->corrective_action_taken = $request->CAtaken;
        $observation->corrective_action_date = $request->date;
        $observation->status = "لم يتم الحل";
        $observation->responsible_correction = $request->responsible_correction;

        if(auth()->user()->admin == 0){

            $observation->responsible_area = auth()->user()->dep;

        }

        else
        {
            $observation->responsible_area = $request->responsible_area;
        }
        
        if(auth()->user()->admin == 1 || auth()->user()->name == 'safety_admin' ){

            $observation->showSafety = 1 ; 
            $observation->showChairman = 0 ; 

        }elseif (auth()->user()->name == 'chairman'){

            $observation->showSafety = 1 ; 
            $observation->showChairman = 1 ;

        }
        else{
            $observation->showSafety = 0 ; 
            $observation->showChairman = 0 ;

        }

        if($request->hasFile('image')){

            $image = $request->image;
            $fileName= $image->getClientOriginalName();
            $explode= explode(".",$fileName );
            $fileActualExt = strtolower(end($explode));
            $fileActualName= $explode[0];
            $fileUniqueName = $fileActualName.$observation->id.'.'.$fileActualExt;
            $image->storeAs('images', $fileUniqueName , 'public');
            $observation->photo = $fileUniqueName;
        }
 
       $observation->save();
       return redirect()->back()->with('message' , ' تم ارسال الملاحظة .. شكرا');
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
    public function edit(Observation $observation)
    {
        return view ('observation.edit' , compact('observation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update (Request $request, Observation $observation)
    {

        $request->validate([
            
            'desc' => ['required'],
        ]);

        $desc = $request->desc;
        $source = $request->source;;
        $status = $request->status;
        $CAtaken = $request->CAtaken;
        $date = $request->date;
        $responsible_area = $request->responsible_area;
        $responsible_correction = $request->responsible_correction;
        $showSafety = 1;

       $observation->update(['desc'=> $desc ,'source'=>$source , 
       'responsible_area'=>$responsible_area, 'responsible_correction'=>$responsible_correction,
       'status'=>$status , 'corrective_action_taken'=>$CAtaken , 'corrective_action_date'=>$date , 'showSafety'=>$showSafety ,
         ]);
       
       return redirect()->back()->with('message' , 'تم الارسال');
    }
    
     public function correctiveAction (Request $request,  $id){

       $status = $request->status;
       $CAtaken = $request->CAtaken;
       $date = $request->date;
       Observation::where('id' , $id)->update(['status'=>$status , 'corrective_action_taken'=>$CAtaken , 'corrective_action_date'=>$date ]);
       return redirect()->back()->with('message' , ' تم ارسال الاجراء التصحيحي .. شكرا');
    }

    public function chairmanVisible (Request $request, $id){

       Observation::where('id' , $id)->update(['showChairman'=> 1 ]);
       return redirect()->back()->with('message' , 'تم الاعتماد');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Observation $observation)
    {
        $observation->delete();
        return redirect('observations/');

    }
}
