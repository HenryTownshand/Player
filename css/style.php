<?php

header( "Content-Type: text/plain" );
echo "
::-webkit-scrollbar {
			width: 0;
			height: 0;
		}
		@font-face{font-family:Pompadur;src:url(fonts/font.eot);src:local(pompadur),url(fonts/font.ttf);}
		@font-face{font-family:Bazy;src:url(fonts/bazy.eot);src:local(bazy),url(fonts/bazy.ttf);}
		@font-face{
			font-family:Aquatico;
			src:url(fonts/Aquatico.otf);
			src:local(anurati),url(fonts/Aquatico.otf);
		}
		.no-scrollbar {
		  overflow-y: scroll;
		  scrollbar-width: none; /*mozilla*/
		  border: 1px solid #eee;
		  border-radius: 7px;
		}
		.no-scrollbar::-webkit-scrollbar {
			display: none; /*chrome*/
		}
		#demoList {
		  height: 380px;
		}
		#demoList .song {
		  padding: 10px;
		  cursor: pointer;
		  border: 1px solid #383838;
		  font-family:Bazy;
		  color:white;
		  border-radius: 5px;
		}
		#player {
			width: 400px;
			height: 400px;
			background: black;
			border-radius: 1em;
			padding: 1em;
			position: absolute;
			top: 50%;
			left: 50%;
			margin-right: -50%;
			transform: translate(-50%, -50%);
		}
		#playsong {
			padding-top: 5%;
			text-align: center;
		}
		.playerstyle {
			width: 400px;
			--plyr-color-main: #383838;
			--plyr-audio-controls-background: black;
			--plyr-audio-control-color: white;
		}
";

?>