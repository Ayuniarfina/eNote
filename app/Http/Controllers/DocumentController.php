<?php

namespace App\Http\Controllers;

use App\Dokumen;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DocumentController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(Request $request)
  {
    $id_user = $request->user()->id;
    $acaras = DB::table('acaras')->where('change_by', $id_user)->get();
    $dokumen= dokumen::get();
    return view('Documents.upload', ['dokumen'=>$dokumen], ['acaras'=>$acaras]);
  }

  public function create()
  {
      $dokumen = dokumen::get();
      return view('dokumen.unggahDokumen', ['dokumen'=>$dokumen]);
  }

  public function store(Request $request)
  {
      $input = Request::all();
      $dokumen = new dokumen($input);
      $dokumen->change_by = $request->user()->id; ;
      $dokumen->id_acara= 0;

      $file = Input::file('dokumen');
      $ekstensi = $file->getClientOriginalExtension();
      $nama_file = md5(uniqid()).'.'.$ekstensi;
      $lokasi = public_path('file');
      $file->move($lokasi,$nama_file);
      $dokumen->nama_file = $nama_file;

      $dokumen->save();

      return view('dokumen.dokumen');
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
