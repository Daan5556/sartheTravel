let muteButton = document.getElementById("muteButton");
let audio = new Audio("assets/audio/gas-audio.mp3");
audio.volume = 0.1;
audio.loop = true;
let isMuted = true;

muteButton.addEventListener("click", () => {
  isMuted = isMuted ? false : true;
  isMuted ? audio.pause() : audio.play();
  muteButton.innerHTML = isMuted
    ? "<span class='material-symbols-outlined'>volume_off</span>"
    : "<span class='material-symbols-outlined'>volume_up</span>";
});
