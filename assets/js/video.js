let muteButton = document.getElementById("muteButton");
let audio = new Audio("assets/audio/gas-audio.mp3");
audio.volume = 0.1;
audio.loop = true;
let isMuted = true;

muteButton.addEventListener("click", () => {
  isMuted = isMuted ? false : true;
  isMuted ? audio.pause() : audio.play();
  muteButton.innerHTML = isMuted
    ? "<span class='material-symbols-outlined' id='volumeIcon' >volume_off</span>"
    : "<span class='material-symbols-outlined' id='volumeIcon' >volume_up</span>";
});

function pagina() {
  window.location.href = "http://localhost/sartheTravel/index.php";
}
