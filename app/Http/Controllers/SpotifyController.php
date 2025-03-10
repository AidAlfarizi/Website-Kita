<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;



class SpotifyController extends Controller
{
    private $client;
    private $clientId = 'YOUR_CLIENT_ID';
    private $clientSecret = 'YOUR_CLIENT_SECRET';
    private $redirectUri = 'http://127.0.0.1:8000/callback';

    public function __construct()
    {
        $this->client = new Client();
    }

    // Step 1: Redirect ke Spotify buat login
    public function login()
    {
        $scopes = "user-read-playback-state user-modify-playback-state";
        $url = "https://accounts.spotify.com/authorize?client_id={$this->clientId}&response_type=code&redirect_uri={$this->redirectUri}&scope=" . urlencode($scopes);

        return redirect($url);
    }

    // Step 2: Spotify Callback buat dapetin token
    public function callback(Request $request)
    {
        $code = $request->query('code');

        $response = $this->client->post('https://accounts.spotify.com/api/token', [
            'form_params' => [
                'grant_type' => 'authorization_code',
                'code' => $code,
                'redirect_uri' => $this->redirectUri,
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
            ],
        ]);

        $data = json_decode($response->getBody(), true);
        session(['spotify_token' => $data['access_token']]);

        return redirect('/spotify/player');
    }

    // Step 3: Ambil lagu yang lagi diputar
    public function getCurrentPlaying()
    {
        $token = session('spotify_token');

        $response = $this->client->get('https://api.spotify.com/v1/me/player/currently-playing', [
            'headers' => ['Authorization' => "Bearer {$token}"]
        ]);

        return response()->json(json_decode($response->getBody(), true));
    }

    // Step 4: Play/Pause lagu
    public function playPause()
    {
        $token = session('spotify_token');

        $this->client->put('https://api.spotify.com/v1/me/player/play', [
            'headers' => ['Authorization' => "Bearer {$token}"]
        ]);

        return response()->json(['status' => 'playing']);
    }
}
