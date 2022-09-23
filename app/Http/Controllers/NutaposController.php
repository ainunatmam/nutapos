<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NutaposController extends Controller
{
    public function soal_4_view()
    {
        return view('nutapos.soal4');
    }
    public function soal_4(Request $request)
    {
        try {
            $this->validate($request, [
                'total'         => 'required|integer',
                'persen_pajak'  => 'required|integer'
            ]);

            // hitung pajak
            $percent_rupiah = $request->total * ($request->persen_pajak/100);

            return json_encode([
                'net_sales' => $request->total - $percent_rupiah,
                'pajak_rp'  => $percent_rupiah
            ]);

            
        } catch (\Throwable $th) {
            return json_encode([
                'message' => 'Internal Server Error'
            ]);
        }
    }

    public function soal_5_view()
    {
        return view('nutapos.soal5');
    }
    public function soal_5(Request $request)
    {
        try {
            $this->validate($request, [
                'diskon'                => 'required',
                'total_sebelum_diskon'  => 'required'
            ]);

            //jumlahkan diskon
            $total_diskon = array_sum($request->diskon);
            if($total_diskon > 100){
                return json_encode([
                    'message' => 'total Diskon Terlalu Banyak'
                ]);
            }

            //hitung diskon
            $jumlah_diskon = $request->total_sebelum_diskon * ($total_diskon/100);

            return json_encode([
                'total_diskon' => $total_diskon,
                'total_harga_setelah_diskon'  => $request->total_sebelum_diskon - $jumlah_diskon
            ]);

            
        } catch (\Throwable $th) {
            return json_encode([
                'message' => 'Internal Server Error'
            ]);
        }
    }

    public function soal_6_view()
    {
        return view('nutapos.soal6');
    }
    public function soal_6(Request $request)
    {
        try {
            // $this->validate($request, [
            //     'total'         => 'required|integer',
            //     'persen_pajak'  => 'required|integer'
            // ]);


            //hitung diskon
            $jumlah_markup = $request->harga_sebelum_markup * ($request->markup_persen/100);
            $jumlah_share_ojol = $jumlah_markup * ($request->share_persen/100);

            return json_encode([
                'net_untuk_resto'             => $request->harga_sebelum_markup + $jumlah_markup,
                'share_untuk_ojol'  => $jumlah_share_ojol
            ]);

            
        } catch (\Throwable $th) {
            return json_encode([
                'message' => 'Internal Server Error'
            ]);
        }
    }

}
