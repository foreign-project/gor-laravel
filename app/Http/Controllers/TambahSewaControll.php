<?php

namespace App\Http\Controllers;

use App\Lapangan;
use App\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TambahSewaControll extends Controller
{
    public function index(Request $request){
      return view('pages.tambahsewa'); // ['operator_nama'=>$request->session()->get('nama')]
    }
    public function dataLapangan(){

      $DataLapangan['data'] = Lapangan::with('jadwal')->get();
      // $DataLapangan['data'] = TambahSewaModel::all();
      return json_encode($DataLapangan);
    }
    public function store(Request $request){
      // $namaoperator = $request->nama_operator;

      // $operator = Operator::where('nama', $namaoperator)->first();
      // dd($request);
      for($i = 0 ; $i < count($request->kode_lapangan) ; $i++){

        Transaksi::insertGetId(
          ['kode_transaksi' => null, 'kode_user' => Auth::user()->kode_user,
          'kode_lapangan'=> $request->kode_lapangan[$i],'kode_jadwal'=> $request->kode_jadwal[$i], 'diskon'=>$request->diskon[$i],
          'tanggal'=>$request->tanggal_jadwal[$i]]
        );
      }

      return redirect('/tambahsewa');

    }

    public function tambahSewa(Request $request){
      return view('datasewa', ['req' => $request]);
    }
}
