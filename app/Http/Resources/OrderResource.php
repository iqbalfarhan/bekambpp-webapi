<?php

namespace App\Http\Resources;

use App\Models\Paket;
use App\Models\Sesi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'tanggal' => $this->tanggal->format('Y-m-d'),
            'user' => new UserResource(User::findOrFail($this->user_id)),
            'sesi' => new SesiResource(Sesi::findOrFail($this->sesi_id)),
            'paket' => new PaketResource(Paket::findOrFail($this->paket_id)),
            'status' => $this->status,
        ];
    }
}
