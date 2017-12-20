<?php

namespace App\Http\Controllers;

use App\Notulensi;
use App\User;
use App\Acara;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotulensiController extends Controller
{
    public function index($id)
    {
      $id_user = Auth::user()->id;
      $acaras = DB::table('acaras')->where('change_by', $id_user)->get();
      $notulensi = DB::table('notulensis')->where('id_notulensi', $id)->get();
      return view('Notulensi.viewNotulensi', ['notulensi'=>$notulensi], ['acaras'=>$acaras]);
    }

    public function create()
    {

      $acaras = DB::table('acaras')->get();
      return view('Notulensi.tambahNotulensi', ['acaras' => $acaras]);
    }

    public function make($id_acara)
    {

      $acaras = DB::table('acaras')->get();
      return view('Notulensi.tambahNotulensi', compact('acaras','id_acara'));
    }


    public function store(Request $request)
    {
        // validate
        $this->validate($request, array(
            'judul' => 'required|string|max:255',
            'tempat' => 'required|string|max:255',
            'moderator' => 'required|string|max:255',
            'topik' => 'required|string|max:255',
            'jumlah' => 'required|integer|max:255',
            'kesimpulan' => 'required|string|max:255',

        ));
        //isi  database
        $notulensi=new Notulensi;
        $notulensi->judul = $request->judul;
        $notulensi->tempat = $request->tempat;
        $notulensi->tanggal = $request->tanggal;
        $notulensi->moderator = $request->moderator;
        $notulensi->topik = $request->topik;
        $notulensi->jumlah = $request->jumlah;
        $notulensi->kesimpulan = $request->kesimpulan;
        $notulensi->id_user= $request->user()->id;
        $notulensi->change_by= $request->user()->id;
        $notulensi->id_acara = $request->id_acara;
        $notulensi->id_divisi=0;

        $notulensi->save();

        return redirect()->route('Notulensi.index', [$notulensi->id]);
    }

    public function show()
    {

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
