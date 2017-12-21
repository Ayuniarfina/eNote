<?php

namespace App\Http\Controllers;

use App\Notulensi;
use App\User;
use App\Komentar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class KomentarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$komentar = DB::table('action_notulensis')->select('*')->get();
        $komentar = komentar::get();
        $id_user = Auth::user()->id;
        $acaras = DB::table('acaras')->where('change_by', $id_user)->get();
        $notulensi = DB::table('notulensis')->where('id_notulensi', $id)->get();
        return view('Notulensi.viewNotulensi', ['notulensi'=>$notulensi], ['acaras'=>$acaras], ['komentar'=>$komentar]);
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
    public function store(Request $request)
    {
        //$komentar = DB::table('action_notulensis')->get();
        $komentar = new komentar;
        $komentar->komentar = $request->komentar;
        $komentar->id_user= $request->user()->id;
        $komentar->name= $request->user()->name;
        $komentar->id_notulensi= 0;
        $komentar->change_by= $request->user()->id;
        
        $komentar->save();
         
        return Redirect::back();
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
