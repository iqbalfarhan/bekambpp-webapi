<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\SesiResource;
use App\Models\Sesi;
use Illuminate\Http\Request;

class SesiController extends Controller
{
    public function index()
    {
        try {
            $data = SesiResource::collection(Sesi::get());
            return response()->json($data, 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Terjadi kesalahan saat mengambil data sesi.',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function show(Sesi $sesi)
    {
        try {
            $data = new SesiResource($sesi);
            return response()->json($data, 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Terjadi kesalahan saat mengambil data sesi.',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
