<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Sesi;
use Illuminate\Http\Request;

class SesiController extends Controller
{
    public function index(){
        return response()->json(Sesi::get());
    }
}
