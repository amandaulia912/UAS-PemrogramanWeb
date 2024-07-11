<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class SawController extends Controller
{
    public function index()
    {
        $alternatifs = Alternatif::all();

        // Mendapatkan nilai maksimal dan minimal untuk masing-masing kriteria
        $maxC1 = Alternatif::max('C1');
        $minC2 = Alternatif::min('C2');
        $minC3 = Alternatif::min('C3');
        $maxC4 = Alternatif::max('C4');

        // Bobot untuk masing-masing kriteria
        $bobotC1 = 0.29;
        $bobotC2 = 0.24;
        $bobotC3 = 0.18;
        $bobotC4 = 0.29;

        // Normalisasi dan pembobotan
        foreach ($alternatifs as $item) {
            $normalisasiC1 = $item->C1 / $maxC1;
            $normalisasiC2 = $minC2 / $item->C2;
            $normalisasiC3 = $minC3 / $item->C3;
            $normalisasiC4 = $item->C4 / $maxC4;

            // Menghitung nilai SAW
            $item->normalized_saw =
                ($normalisasiC1 * $bobotC1) +
                ($normalisasiC2 * $bobotC2) +
                ($normalisasiC3 * $bobotC3) +
                ($normalisasiC4 * $bobotC4);
        }

        return view('Normalisasi', [
            'alternatifs'  => $alternatifs,
            'title' => 'hasilHitung'
        ], compact('alternatifs'));
    }
}