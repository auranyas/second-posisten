<?php

namespace App\Http\Controllers;

use App\Models\Menfess;
use Illuminate\Http\Request;

class MenfessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $m =  Menfess::orderBy("created_at","DESC")->get();

        return view('landing' , compact('m'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('landing');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $m = new Menfess();
        $m->menfess = $request->menfess;
    // dd($menfess);
        $m->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menfess  $menfess
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menfess = Menfess::find($id);

        return view('komentar', compact('menfess'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menfess  $menfess
     * @return \Illuminate\Http\Response
     */
    public function edit(Menfess $menfess)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menfess  $menfess
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menfess $menfess)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menfess  $menfess
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menfess $menfess)
    {
        //
    }
}
