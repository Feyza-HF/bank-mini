<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Transaksi;
use App\models\User;

class TransaksiController extends Controller
{
    public function index()
    {
        $semuaTransaksi = Transaksi::all();
        return view('transaksi.index')->with('semuaTransaksi', $semuaTransaksi);
    }
    public function tambahTrans()
    {
        return view('transaksi.create');
    }
    public function cariNasabah(Request $request){
        $nasabah = User::where('ktp', $request->ktp)->where('peran', 'nasabah')->first();
        return view('transaksi.create')->with('nasabah', $nasabah);
    }

    public function simpanTrans(Request $request)
    {
        $transaksi = new Transaksi();
        $transaksi->user_id = $request->user_id;
        $transaksi->tabungan = $request->tabungan;
        $transaksi->save();
        return redirect()->route('transaksi.index');
    }

    public function hapusTrans($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index');
    }

    public function editTrans($id){
        $transaksi = Transaksi::find($id);
        return view('transaksi.edit')->with('transaksi', $transaksi);
    }
    public function updateTrans(Request $request,$id){
        $transaksi = Transaksi::find($id);
        $transaksi->user_id = $request->user_id;
        $transaksi->tabungan = $request->tabungan;
        $transaksi->save();
        return redirect()->route('transaksi.index');
    }
}
