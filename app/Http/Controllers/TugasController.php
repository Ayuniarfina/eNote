<?php

namespace App\Http\Controllers;

use App\Tugas;
use App\User;
use App\Acara;
use App\Buat_tugas;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TugasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id_acara, Request $request)
    {
      $id_user = $request->user()->id;
      $tugas = DB::table('tugas')->where('change_by', $id_user)->first();
      return view('', ['tugas' => $tugas]);
    }

    public function create()
    {
      
      $acaras = DB::table('acaras')->get();
      $users= DB::table('users')->get();
      $notulensis = DB::table('notulensis')->get();
      $buattugas= DB::table('buat_tugas')->get();
      $tugas= DB::table('tugas')->get();
      $selectedUser = User::first()->id;
      return view('tugas.tambahTugas', compact('acaras', 'users', 'notulensis', 'buattugas', 'tugas', 'selectedUser'));
    }

    public function store(Request $request)
    {
      $acaras = DB::table('acaras')->get();
      
      $tugas = new tugas;
      $tugas->deskripsi = $request->deskripsi;
      $tugas->change_by= $request->user()->id;
      $tugas->id_acara= 0;

      $tugas->save();

      $buat_tugas = new buat_tugas;
      $buat_tugas->id_user = $request->nama;
      $buat_tugas->id_tugas = $tugas->id;
      $buat_tugas->status = 0;
      $buat_tugas->change_by = $request->user()->id;
      
      $buat_tugas->save();

      return Redirect::back();
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
