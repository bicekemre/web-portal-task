<?php

namespace App;

use Luracast\Restler\RestException;

class Data
{
    /**
     * @return mixed
     * @throws RestException
     * @url GET /data
     */
    public function index()
    {
        $accessToken = $this->getAuthToken();
        if (!$accessToken) {
            throw new RestException(401, 'Failed to get access token');
        }

        $url = 'https://api.baubuddy.de/dev/index.php/v1/tasks/select';
        $headers = [
            'Authorization: Bearer ' . $accessToken
        ];

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }

    private function getAuthToken()
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.baubuddy.de/index.php/login",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\"username\":\"365\", \"password\":\"1\"}",
            CURLOPT_HTTPHEADER => [
                "Authorization: Basic QVBJX0V4cGxvcmVyOjEyMzQ1NmlzQUxhbWVQYXNz",
                "Content-Type: application/json"
            ],
        ]);
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        $responseArray = json_decode($response, true);
        return $responseArray['oauth']['access_token'] ?? null;
    }
}