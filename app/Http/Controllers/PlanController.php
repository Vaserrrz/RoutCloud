<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planes = plan::all();
        return view('planes', compact('planes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function create()
    {
        //
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plan = new plan();

        $plan->PLAN_NOMBRE = $request->PLAN_NOMBRE;
        $plan->PLAN_SUBIDA = $request->PLAN_SUBIDA;
        $plan->PLAN_BAJADA  = $request->PLAN_BAJADA ;
        $plan->PLAN_CONTENCION = $request->PLAN_CONTENCION;
        $plan->PLAN_COSTO = $request->PLAN_COSTO;
        $plan->PLAN_PRECIO  = $request->PLAN_PRECIO;

        $plan->save();


        return redirect()->route('planes');
    }

    public function details()
    {
        $planes = plan::all();
        return view('detailsplanes', compact('planes'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function show($id)
    {
        //
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  /*  public function edit(plan $plan)
    {


    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
            $plan = plan::find($id );

            $plan->PLAN_NOMBRE = $request->PLAN_NOMBRE;
            $plan->PLAN_SUBIDA = $request->PLAN_SUBIDA;
            $plan->PLAN_BAJADA  = $request->PLAN_BAJADA ;
            $plan->PLAN_CONTENCION = $request->PLAN_CONTENCION;
            $plan->PLAN_COSTO = $request->PLAN_COSTO;
            $plan->PLAN_PRECIO  = $request->PLAN_PRECIO;

            $plan->save();
            return redirect()->route('planes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(plan $plan){
        $plan->delete();
        return redirect()->route('planes');
    }

}
