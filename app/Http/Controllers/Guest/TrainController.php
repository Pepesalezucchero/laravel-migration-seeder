<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Train;

class TrainController extends Controller
{
    public function index() {
        $partenza_odierna = now()->toDateString();
        $trains = Train::whereDate('orario_di_partenza', $partenza_odierna)
                        ->orderBy('orario_di_partenza')
                        ->get();

        return view('pages.index', compact('trains'));
    }
}
