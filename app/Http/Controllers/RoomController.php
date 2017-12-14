<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = $request->user()->id;
        $acaras = DB::table('acaras')->where('change_by', $id)->get();
        $notulensis = DB::table('notulensis')->get();
        return view('room', ['notulensis' => $notulensis], ['acaras' => $acaras] );
    }
}
