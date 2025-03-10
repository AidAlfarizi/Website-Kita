@extends('layouts.app')

@section('content')
<div class="spotify-container">
    <h1>Spotify Player</h1>
    <div id="track-info">
        <p><strong>Now Playing:</strong> <span id="track-name">Loading...</span></p>
        <p><strong>Artist:</strong> <span id="artist-name">Loading...</span></p>
    </div>
    <button id="playPause">Play/Pause</button>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    function fetchCurrentPlaying() {
        fetch("/spotify/current")
            .then(response => response.json())
            .then(data => {
                if (data.item) {
                    document.getElementById("track-name").textContent = data.item.name;
                    document.getElementById("artist-name").textContent = data.item.artists[0].name;
                }
            });
    }

    document.getElementById("playPause").addEventListener("click", function () {
        fetch("/spotify/play", { method: "POST" });
    });

    fetchCurrentPlaying();
    setInterval(fetchCurrentPlaying, 5000);
});
</script>

<style>
.spotify-container {
    text-align: center;
    padding: 20px;
    background: rgba(0, 255, 0, 0.2);
    backdrop-filter: blur(10px);
    border-radius: 10px;
}
button {
    background: #1db954;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
}
</style>
@endsection
