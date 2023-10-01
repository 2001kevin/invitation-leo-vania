var tag = document.createElement("script");
    tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName("script")[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var player;
function onYouTubeIframeAPIReady() {
  player = new YT.Player("player", {
    width: "560",
    height: "315",
    videoId: "pyv4JNSWxss", //replace VIDEO_ID with the videoId from Youtube
    events: {
      onPlayerReady: onPlayerReady,
      onStateChange: onPlayerStateChange,
    },
  });
}

function onPlayerReady(event) {
  console.log("player ready");
}

var music = document.getElementById("myAudio");

function onPlayerStateChange(newState) {
  if (newState.data == 1) {
    audio.pause();
  } else if (newState.data == 0) {
    audio.play();;
  } else if (newState.data == 2) {
    audio.play();;
  }
}
