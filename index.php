<html prefix="og: http://ogp.me/ns#" lang="ru">
  <head>
    <title>Плеер Totalen Krieg</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="utf-8">
	<meta property="og:title" content="TK PLAYER" />
	<meta property="og:type" content="player.music" />
	<meta property="og:url" content="https://radio.tkofficial.ru/player" />
	<meta property="og:image" content="https://radio.tkofficial.ru/image/sitelogo.png" />
	<link rel="shortcut icon" href="logo.ico" type="image/x-icons" />
	<meta name="description" content="Мы занимаемся музыкой.">
	<meta name="keywords" content="Радио, интернет радио, игровое радио, игры, радио totalen krieg, радио тотален криг, тотален криг, totalen krieg, радио ТК, радио TK">
	<meta name="yandex-verification" content="eeee2b87d4fb896d" />
	<link rel="shortcut icon" href="logo.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://cdn.plyr.io/3.7.2/plyr.css" />
	
	<script src="audio.js"></script>

	<link rel="stylesheet" type="text/css" href="https://radio.tkofficial.ru/player/css/style.php">
  </head>
  <body style="background: black">
	<div id="playsong">
		<span id="songname" class="songname" style="color:white; font-family:Pompadur; font-size:48px;"></span>
	</div>
	<div id="player">
		<div class="playerstyle">
			<audio id="demoAudio" class="demoAudio" style="width: 400px;" controls></audio>
		</div>
	
	<br><br>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
	<input style="border-radius: 5px; height: 25px; width: 400px; font-size:20px; font-family:Bazy;" type="text" name="search" id="search" class="search">
	<br>
	<div class="no-scrollbar">
		<div id="demoList">
			<div id="result"><?php include 'audio.php'; ?></div>
		</div>
	</div>
	<script src="https://cdn.plyr.io/3.7.2/plyr.js"></script>
	<script>
          document.addEventListener('DOMContentLoaded', () => {
             const controls = [
              'play',
              'progress',
              'duration',
              'volume',
              'settings'
          ];
		  const settings = [
			  'captions',
			  'quality', 
			  'speed', 
			  'loop',
		  ];
		  
          const player =  new Plyr(document.querySelector('.demoAudio'), { settings, controls});
      });
	</script>
  </body>
  
</html>
