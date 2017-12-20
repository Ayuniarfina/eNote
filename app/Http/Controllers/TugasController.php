<?php

namespace App\Http\Controllers;

use App\Tugas;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TugasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tugass = Tugas::get();
        return view('home');
    }

    public function create(Request $request)
    {
      $id_user = $request->user()->id;
      $acaras = DB::table('acaras')->where('change_by', $id_user)->get();
      return view('tugas.tambahTugas', ['acaras' => $acaras]);
    }

    public function store(Request $request)
    {
      $tugas = new tugas;
      $tugas->deskripsi = $request->deskripsi;
      $tugas->id_acara= 0;
      $tugas->change_by= $request->user()->id;

      $tugas->save();

      return view('home');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
