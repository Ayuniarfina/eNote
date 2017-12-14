<?php

namespace App\Http\Controllers;

use App\Acara;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $id = $request->user()->id;
        $acaras = DB::table('acaras')->where('change_by', $id)->get();
        $notulensis = DB::table('notulensis')->get();
        return view('home', ['acaras' => $acaras]);
    }
}
