<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Models\Sesi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        try {
            $datas = OrderResource::collection(Order::where('user_id', $user->id)->get());
            return response()->json($datas);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Terjadi kesalahan saat mengambil data sesi.',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function store(Request $request)
    {
        $user_id = Auth::id();
        $request->validate([
            'tanggal' => 'required',
            'sesi_id' => 'required',
            'paket_id' => 'required',
            'keterangan' => '',
        ]);

        $existingOrder = Order::where('tanggal', $request->tanggal)
        ->where('sesi_id', $request->sesi_id)
        ->where('user_id', $user_id)
        ->first();

        if ($existingOrder) {
            $sesi = Sesi::find($request->sesi_id);
            $tanggal = date('d F Y', strtotime($request->tanggal));
            return response()->json([
                'error' => "Mohon maaf booking sesi untuk jam {$sesi->jam_text} tanggal {$tanggal} tidak berhasil, mungkin anda melakukan booking diwaktu yang bersamaan sehingga waktu booking belum diperbarui. silakan pilih kembali waktu booking anda",
            ], 400);
        }

        try {
            $order = Order::create([
                'tanggal' => $request->tanggal,
                'user_id' => $user_id,
                'sesi_id' => $request->sesi_id,
                'paket_id' => $request->paket_id,
                'keterangan' => $request->keterangan,
            ]);
            $dataorder = Order::find($order->id);
            return response()->json(new OrderResource($dataorder));
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Terjadi kesalahan saat menyimpan order.',
                'message' => $e->getMessage()
            ], 500);
        }
    }

}
