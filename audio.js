var aud = {
  player : null,
  playlist : null,
  now : 0,
  init : () => {
    aud.player = document.getElementById("demoAudio");
    aud.playlist = document.querySelectorAll("#demoList .song");
	let songname = document.getElementById("songname");
	
	if(localStorage.getItem("volume"))
	{
		aud.player.volume = localStorage.getItem("volume");
	}else{
		aud.player.volume = 0.10;
	}
    for (let i=0; i<aud.playlist.length; i++) {
      aud.playlist[i].onclick = () => { aud.play(i); };
    }
    aud.player.oncanplay = aud.player.play;
    aud.player.onended = () => {
      aud.now++;
      if (aud.now>=aud.playlist.length) { aud.now = 0; }
      aud.play(aud.now);
    };
	if(aud.player.src == "")
	{
		aud.play(0);
	}
  },
  play : (id) => {
    aud.now = id;
    aud.player.src = aud.playlist[id].dataset.src;
    for (let i=0; i<aud.playlist.length; i++) {
      aud.playlist[i].style.backgroundColor = i==id ? "yellow" : "";
	  aud.playlist[i].style.color = "black";
    }
	for (let i=0; i<aud.playlist.length; i++) {
	  if(id == i){
		aud.playlist[i].style.color = "black";
	  }else{
	    aud.playlist[i].style.color = "white";
	  }
	}
	document.getElementById("songname").textContent=aud.playlist[id].innerHTML;
  }
};
window.addEventListener("DOMContentLoaded", aud.init);

function updateVolume() {
	localStorage.setItem("volume", aud.player.volume);
}

document.addEventListener('DOMContentLoaded', function() {
	setInterval(updateVolume, 1 * 1000);
});

function updateVolume() {
	localStorage.setItem("volume", aud.player.volume);
}
var searchTemp;
var count = new Boolean(true);

function searchSong() {
  var url = "https://radio.tkofficial.ru/player/audio.php?search=";
  
  $("#search").keyup(function() {
	var searchStr = document.getElementById('search').value;
	if(searchTemp != searchStr){
		let str = url+searchStr;
		$("#result").load(str);
		console.log(str);
		searchTemp = searchStr;
		
		history.pushState(null, null, '?search='+searchStr);
	}
  });
  aud.init();
}

