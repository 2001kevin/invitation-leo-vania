const modal = document.getElementById("myModal");
const audio = document.getElementById("myAudio");

const closeBtn = modal.querySelector(".close");

closeBtn.addEventListener("click", function () {
    modal.style.display = "none";
    audio.play();
});
