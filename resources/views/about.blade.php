@extends('layouts.app')

@section('content')
<div class="about-container">
    <div class="about-card">
        <h1 class="about-title">About Aid & Deya</h1>
        <p class="about-text">Di tengah jutaan bintang di alam semesta, ada dua yang bertemu di satu orbit yang sama. Aid & Deya—dua jiwa yang berjalan dalam cerita unik mereka, menjelajahi dunia dengan rasa ingin tahu, tawa, dan impian yang saling terjalin.

            Dari percakapan sederhana hingga rencana besar, dari momen tenang hingga petualangan yang tak terduga, setiap detik adalah bagian dari perjalanan yang terus berkembang. Seperti kode yang disusun dengan sempurna, atau harmoni lagu yang tak lekang oleh waktu, kami menciptakan dunia kami sendiri—satu langkah lebih dekat ke masa depan yang selalu kami impikan.

            Di sini, di ruang digital ini, tersimpan memori, tawa, dan harapan. Sebuah tempat di mana kenangan hidup selamanya, dan di mana cerita kami terus berkembang, frame by frame, melodi demi melodi.

            This is us. Our universe. Our story.
        </p>
    </div>
</div>

<style>
    /* Styling untuk Halaman About */
    .about-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background: linear-gradient(135deg, #003300, #00ff00);
        /* Gradasi hijau futuristik */
        color: white;
        text-align: center;
    }

    .about-card {
        background: rgba(0, 255, 0, 0.1);
        /* Glass effect */
        backdrop-filter: blur(10px);
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 0px 20px rgba(0, 255, 0, 0.5);
        /* Glow effect */
        max-width: 600px;
    }

    .about-title {
        font-size: 28px;
        font-weight: bold;
        text-shadow: 0px 0px 10px limegreen;
        margin-bottom: 15px;
    }

    .about-text {
        font-size: 18px;
        line-height: 1.6;
    }
</style>
@endsection