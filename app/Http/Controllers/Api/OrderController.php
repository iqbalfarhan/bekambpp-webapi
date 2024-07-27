<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

        Order::updateOrCreate([
            'tanggal' => $request->tanggal,
            'sesi_id' => $request->sesi_id,
            'user_id' => $request->user_id,
            'paket_id' => $request->paket_id,
        ]);

        return response()->json([
            'message' => 'Order berhasil disimpan',
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
