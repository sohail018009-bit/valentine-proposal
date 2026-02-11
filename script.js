
const yesBtn = document.getElementById("yesBtn");
const noBtn = document.getElementById("noBtn");
const celebration = document.getElementById("celebration");
const question = document.getElementById("question");
const music = document.getElementById("bgMusic");
const toggle = document.getElementById("musicToggle");

let noClicks = 0;

yesBtn.addEventListener("click", () => {
    try {
        localStorage.setItem('proposal_response', 'YES');
    } catch (e) {
        // ignore storage errors
    }

    celebration.classList.remove("hidden");
});

noBtn.addEventListener("mouseover", () => {
    if(noClicks < 5){
        const x = Math.random() * window.innerWidth - 100;
        const y = Math.random() * window.innerHeight - 50;
        noBtn.style.position = "absolute";
        noBtn.style.left = x + "px";
        noBtn.style.top = y + "px";
    }
});

noBtn.addEventListener("click", () => {
    noClicks++;
    const messages = [
        "Are you sure? 🥺",
        "Please give me one chance ❤️",
        "I promise to make you smile every day 😊",
        "I can't imagine life without you 💖"
    ];
    question.innerText = messages[Math.min(noClicks-1, messages.length-1)];
});

toggle.addEventListener("click", () => {
    music.muted = !music.muted;
    toggle.innerText = music.muted ? "🔊 Unmute" : "🔇 Mute";
});
