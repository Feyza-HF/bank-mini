<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class LaporanController extends Controller
{
    public function halamanNasabah(){
        $semuaTrans = Transaksi::where('user_id', auth()->user()->id)->get();
        return view('nasabah.index')->with('semuaTrans', $semuaTrans);
    }
    public function laporanNasabah(){
        $semuaTrans = Transaksi::where('user_id', auth()->user()->id)->get();
        return view('nasabah.laporan')->with('semuaTrans', $semuaTrans);
    }

    public function cetakLaporan(){
        $semuaTrans = Transaksi::where('user_id', auth()->user()->id)->get();
        $pdf = Pdf::loadView('nasabah.laporan', ['semuaTrans' => $semuaTrans]);
        return $pdf->stream('invoice.pdf');
    }
    public function laporanTransaksiAdmin(){
        $semuaTrans = Transaksi::all();
        return view('admin.laporan')->with('semuaTransaksi', $semuaTrans);
    }

    public function cetakLaporanAdmin(){
        $semuaTrans = Transaksi::all();
        $pdf = Pdf::loadView('admin.laporan', ['semuaTransaksi' => $semuaTrans]);
        return $pdf->stream('lapuran seluruh nasabah.pdf');
    }

    public function cetakLaporanPilih($id){
        $semuaTrans = Transaksi::where('user_id', $id)->get();
        $nasabah = User::find($id);
        $pdf = Pdf::loadView('admin.cetak', ['semuaTrans' => $semuaTrans, 'nasabah' => $nasabah]);
        return $pdf->stream('laporan nasabah.pdf');
    }
}
