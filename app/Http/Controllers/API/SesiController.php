<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\SesiResource;
use App\Models\Sesi;
use Illuminate\Http\Request;

class SesiController extends Controller
{
    public function index(Request $request)
    {
        try {
            $tanggal = $request->input('tanggal');
            $sesiCollection = Sesi::whereHas('orders', function ($query) use ($tanggal) {
                $query->byTanggal($tanggal);
            })->get();
            $data = SesiResource::collection($sesiCollection);
            return response()->json($data, 200);

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Terjadi kesalahan saat mengambil data sesi.',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
