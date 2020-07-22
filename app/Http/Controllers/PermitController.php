<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permit;
use App\Http\Requests\PermitRequest;

class PermitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        if($request->query('date') == date('Y-m-d')){

            $now= date('Y-m-d') ;
            $permits = Permit::where('date' , $now)->get();
            if($permits){

                return view ('permit.index' , compact('permits'));
            }
            else
            {
                return view ('permit.index'); 
            }
        }
        else
        {

            $permits=Permit::all();
            return view ('permit.index' , compact('permits'));

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('permit.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermitRequest $request)
    {
        $permit = new Permit;
       
        $permit->location = $request->location;
        $permit->desc = $request->desc;
        $permit->type = $request->type;
        $permit->fire_fighting = $request->fire_fighting;
        $permit->date = date('Y-m-d');
        $permit->save();

        return redirect('permits/')->with('message' , 'observation posted');
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
    public function destroy(Permit $permit)
    {
        $permit->delete();
        return redirect('permits/');

    }
}
