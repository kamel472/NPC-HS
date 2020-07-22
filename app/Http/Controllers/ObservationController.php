<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Observation;
use App\Http\Requests\ObservationStoreRequest;
use App\Http\Requests\ObservationUpdateRequest;

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
    public function store(ObservationStoreRequest $request)
    {
        
        $observation = new Observation;
       
        $observation->desc = $request->desc;
        $observation->category = $request->category;
        $observation->source = 'ملاحظة';
        $observation->observer = $request->observer;
        $observation->corrective_action_taken = $request->CAtaken;
        $observation->corrective_action_date = $request->date;
        $observation->status = "لم يتم الحل";
        $observation->responsible_party = $request->resposible;
        $observation->priority = $request->priority;

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
        $category = $request->category;
        $source = $request->source;;
        $status = $request->status;
       $CAtaken = $request->CAtaken;
       $date = $request->date;
        $responsible_party = $request->resposible;
        $priority = $request->priority;


       
       $observation->update(['desc'=> $desc,'category'=>$category ,'source'=>$source , 
       'responsible_party'=>$responsible_party,'priority'=>$priority,
       'status'=>$status , 'corrective_action_taken'=>$CAtaken , 'corrective_action_date'=>$date ]);
       
       return redirect()->back()->with('message' , 'تم التعديل');
    }
    
     public function correctiveAction (Request $request,  $id)
    {
       $status = $request->status;
       $CAtaken = $request->CAtaken;
       $date = $request->date;
       Observation::where('id' , $id)->update(['status'=>$status , 'corrective_action_taken'=>$CAtaken , 'corrective_action_date'=>$date ]);
       return redirect()->back()->with('message' , ' تم ارسال الاجراء التصحيحي .. شكرا');
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
