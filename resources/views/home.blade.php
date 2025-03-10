@extends('layouts.app')

<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">

@section('content')
<div class="home-container">
    <h1 class="home-title">Welcome to Aid & Deya's Website</h1>
    <p class="home-text">Tempat di mana kita menyimpan kenangan terbaik dalam hidup.</p>

    <!-- Contact Section -->
    <div class="quotes-container">
       <p id="quotes-text"></p>
    </div>
</div>



<style>
    /* Styling Home */
    .home-container {
        text-align: center;
        padding: 60px;
        background: linear-gradient(135deg, #003300, #00ff00);
        color: white;
    }

    .home-title {
        font-size: 36px;
        text-shadow: 0px 0px 10px limegreen;
    }

    .home-text {
        font-size: 20px;
        margin-bottom: 40px;
    }

    /* Styling Contact */
    .quotes-container {
       background: rgba(0, 255, 0, 0.1);
       backdrop-filter: blur(10px);
       box-shadow: 0px 0px 15px rgba(0, 255, 0, 0.5);
       display: inline-block;
       margin-top: 20px;
       text-align: center;
       font-size: 24px;
       font-weight: bold;
       color: #fff;
       text-shadow: 0 0 10px rgba(0, 255, 0, 0.8);
    }

    .fade-in {
        opacity: 0;
        animation: fadeInGlow 2s ease-in-out forwards;
    }

    @keyframes fadeInGlow {
        0% {
            opacity: 0;
            text-shadow: 0 0 5px rgba(0, 255, 0, 0.2);
        }
        100% {
            opacity: 1;
            text-shadow: 0 0 15px rgba(0, 255, 0, 1);
        }
    }

</style>


<!-- Efek Partikel -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        for (let i = 0; i < 30; i++) {
            let particle = document.createElement("div");
            particle.className = "particle";
            particle.style.left = Math.random() * 100 + "vw";
            particle.style.top = Math.random() * 100 + "vh";
            particle.style.animationDuration = (Math.random() * 3 + 2) + "s";
            document.body.appendChild(particle);
        }
    });

    document.addEventListener("DOMContentLoaded", function () {
    const quotes = "'Every photo tells a story, every story holds a memory, and every memory is a part of us'";
    let i = 0;
    let textElement = document.getElementById("quotes-text");

    function typeWriter() {
        if (i < quotes.length) {
            textElement.innerHTML += quotes.charAt(i);
            i++;
            setTimeout(typeWriter, 50);
        } else {
            textElement.classList.add("fade-in");
        }
    }

    typeWriter();
});
</script>


@endsection