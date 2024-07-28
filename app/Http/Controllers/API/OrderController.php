<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $datas = OrderResource::collection(Order::where('user_id', $user->id)->get());
        return response()->json($datas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'sesi_id' => 'required',
            'user_id' => 'required',
            'paket_id' => 'required',
        ]);

        $order = Order::updateOrCreate([
            'tanggal' => $request->tanggal,
            'user_id' => $request->user_id,
        ],[
            'sesi_id' => $request->sesi_id,
            'paket_id' => $request->paket_id,
        ]);

        return response()->json([
            'message' => 'Order berhasil disimpan',
            'data' => Order::with('user', 'sesi', 'paket')->find($order->id)
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
