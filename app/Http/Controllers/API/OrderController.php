<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Models\Order;
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
            'tanggal' => [
                'required',
                Rule::unique('orders')->where(function ($query) use ($user_id, $request) {
                    return $query->where('user_id', $user_id)->where('sesi_id', $request->sesi_id);
                })
            ],
            'sesi_id' => 'required',
            'paket_id' => 'required',
            'keterangan' => '',
        ]);

        try {
            $order = Order::updateOrCreate([
                'tanggal' => $request->tanggal,
                'user_id' => $user_id,
            ],[
                'sesi_id' => $request->sesi_id,
                'paket_id' => $request->paket_id,
                'keterangan' => $request->keterangan,
            ]);
            return response()->json(Order::with('user', 'sesi', 'paket')->find($order->id));
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Terjadi kesalahan saat mengambil data sesi.',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
