<?php

namespace App\Http\Resources\Registrasi;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RegistrasiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return array_merge(parent::toArray($request), [
            'message' => 'Registrasi Berhasil',
            'redirect' => route('login')
        ]);
    }
}
