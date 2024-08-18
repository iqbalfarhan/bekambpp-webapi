<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PaketResource;
use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index(){
        try {
            $datas = PaketResource::collection(Paket::get());
            return response()->json($datas);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Terjadi kesalahan saat mengambil data sesi.',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
