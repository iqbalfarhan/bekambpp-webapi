<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\SesiResource;
use App\Models\Sesi;
use Illuminate\Http\Request;

class SesiController extends Controller
{
    public function index(){
        $data = SesiResource::collection(Sesi::get());
        return response()->json($data);
    }
}
