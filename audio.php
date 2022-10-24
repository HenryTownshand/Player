<?php
	$songs = glob("audio/*.{mp3,webm,ogg,wav}", GLOB_BRACE);
	$name = $_GET['search'];
	
	if (is_array($songs)) 
	{
		if(array_key_exists('random', $_GET)) shuffle($songs);
		foreach ($songs as $k=>$s) 
		{
			if($name != NULL)
			{
				if(mb_stripos($s, $name)==true)
				{
					$namesong = str_replace(".mp3", "", $s);
					$s = str_replace('\'', "%27", $s);
					printf("<div data-src='%s' class='song'>%s</div>", $s, basename($namesong));
				}
			}else{
				$namesong = str_replace(".mp3", "", $s);
				$s = str_replace('\'', "%27", $s);
				printf("<div data-src='%s' class='song'>%s</div>", $s, basename($namesong));
			}
		}
	}else { echo "No songs found!"; }
	
	
?> 

<script type="text/javascript">
	document.getElementById('search').value = '<?php echo $_GET['search'] ?>';
	searchSong();
</script>