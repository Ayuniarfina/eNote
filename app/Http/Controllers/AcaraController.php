<?php

namespace App\Http\Controllers;

use App\Acara;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AcaraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id_acara, Request $request)
    {
      $id_user = $request->user()->id;
      $acaras = DB::table('acaras')->where('change_by', $id_user)->get();
      $notulensis = DB::table('notulensis')->where('id_acara', $id_acara)->get();
      return view('Acara.room', compact('id_acara','notulensis','acaras'));
    }

    public function create(Request $request)
    {
      $id_user = $request->user()->id;
      $acaras = DB::table('acaras')->where('change_by', $id_user)->get();
      return view('Acara.tambahAcara', ['acaras' => $acaras]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $this->validate($request, array(
            'name' => 'required|string|max:255',
            'ketua' => 'required|string|max:255',
            'sekretaris1' => 'required|string|max:255',
            'sekretaris2' => 'required|string|max:255',
            'bendahara1' => 'required|string|max:255',
            'bendahara2' => 'required|string|max:255',

        ));


        //isi  database
        $acara=new Acara;
        $acara->name = $request->name;
        $acara->ketua = $request->ketua;
        $acara->sekretaris1 = $request->sekretaris1;
        $acara->sekretaris2 = $request->sekretaris2;
        $acara->bendahara1 = $request->bendahara1;
        $acara->bendahara2 = $request->bendahara2;
        $acara->divisi = $request->divisi;
        $acara->change_by= $request->user()->id;
        $acara->save();

        return redirect()->route('home', $acara->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return view('home');
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
