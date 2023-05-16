<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GeolocationService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = env('GOOGLE_API_KEY');
    }

    public function getAddress($cep)
    {
        $url = 'https://maps.googleapis.com/maps/api/geocode/json';
        $response = Http::get($url, [
            'address' => $cep,
            'key' => $this->apiKey,
        ]);

        $data = $response->json();

        if ($response->ok() && isset($data['results'][0]['geometry']['location'])) {
           return $data['results'][0]['geometry']['location'];
        }

        return null;
    }
}
