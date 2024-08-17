<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\SesiResource;
use App\Models\Sesi;
use Illuminate\Http\Request;

class SesiController extends Controller
{
    public function index(Request $request){
        $tanggal = $request->tanggal;

        $data = SesiResource::collection(
            Sesi::when($tanggal, function($query, $tanggal) {
                $query->whereHas('orders', function($q) use ($tanggal) {
                    $q->where('tanggal', $tanggal);
                });
            }, function($query) {
                $query->whereHas('orders', function($q) {
                    $q->where('tanggal', today()->toDateString());
                });
            })->get()
        );

        return response()->json($data);
    }
}
