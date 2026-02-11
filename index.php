
<!-- Static version: removed DB dependency. All responses are handled client-side. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Will You Be Mine Forever?</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="hearts"></div>

<section class="container">
    <h1 class="title">My Love, I Have Something Special To Ask You... ❤️</h1>
    <p class="subtitle">From the moment you came into my life, everything became brighter, softer, and more beautiful. You are my happiness, my peace, my forever. 💖</p>

    <div class="proposal-box">
        <h2 id="question">Will You Be Mine Forever? 💍❤️</h2>

        <div class="buttons">
            <button id="yesBtn" class="yes-btn">YES 💖</button>
            <button id="noBtn" class="no-btn">NO 😢</button>
        </div>
    </div>
</section>

<div id="celebration" class="celebration hidden">
    <h1>You Just Made Me The Happiest Person Alive! ❤️</h1>
    <img src="https://i.imgur.com/4M7IWwP.png" class="ring-img">
    <p>I promise to love you forever, every single day. 💖🌹</p>
</div>

<audio id="bgMusic" autoplay loop muted>
    <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg">
</audio>

<button id="musicToggle" class="music-btn">🔊 Unmute</button>

<script src="script.js"></script>
</body>
</html>
