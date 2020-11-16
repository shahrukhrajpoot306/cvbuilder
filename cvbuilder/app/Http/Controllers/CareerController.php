<?php

namespace App\Http\Controllers;

use App\Career;
use COM;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = auth()->user()->careers;

        return view('career.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('career.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'job_title'=>'required',
            'company'=>'required',
            'city'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
        ]);

        auth()->user()->careers()->create($request->all());


        return redirect()->route('career.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function show(Career $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function edit(Career $career)
    {
        return view('career.edit', compact('career'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Career $career)
    {
        $request->validate([
            'job_title'=>'required',
            'company'=>'required',
            'city'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
        ]);

        $career->update($request->all());


        return redirect()->route('career.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy(Career $career)
    {
            $career->delete();

            return back();
    }
}
