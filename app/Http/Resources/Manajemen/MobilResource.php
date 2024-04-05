<?php

namespace App\Http\Resources\Manajemen;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MobilResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return array_merge(parent::toArray($request), [
            'message' => 'Mobil Berhasil disimpan',
            'redirect' => route('mobil.index')
        ]);
    }
}
