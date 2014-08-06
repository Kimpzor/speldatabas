<?php
// Include the template and connection to MySQL!
include_once("inc/template.php");
include_once("inc/connection.php");


$tablePost = "game";

$gameId = isset($_GET['id']) ? $_GET['id'] : '';


//Gets all posts from DB
	$query = <<<END
		SELECT gameId, gamePic, gameName, gameDesc, gameSpoil, gameGen, gameRel, gameChar 
		FROM {$tablePost} 
		WHERE gameId = {$gameId};
END;

$res = $mysqli->query($query) or die("Could not query database" . $mysqli->errno . " : " . $mysqli->error); //Performs query
	
	if($res->num_rows < 1) {
	$content = <<<END
			<p>The game could not be found! Please try again</p>
END;
	} else {
		
date_default_timezone_set("Europe/Stockholm");
$row = $res->fetch_object();
	$title			= utf8_decode(htmlspecialchars($row->gameName));
	$gamePic		= utf8_decode(htmlspecialchars($row->gamePic));
	$description	= utf8_decode(htmlspecialchars($row->gameDesc));
	$release		= strtotime($row->gameRel);
	$release		= date("d M Y", $release);
	$genre			= utf8_decode(htmlspecialchars($row->gameGen));
	$characters		= utf8_decode(($row->gameChar));
	$spoiler		= utf8_decode(htmlspecialchars($row->gameSpoil));
	

	$adminRow = "";
	
	if(isset($_SESSION["username"])) {
		$adminRow = <<<END
			<p class="gb-admin-row"><a href="edit.php?id={$row->gameId}">Edit</a> &middot; <a href="delete.php?id={$row->gameId}">Delete</a></p>
END;
	}
	
	
$content = <<<END

<img src="{$gamePic}" /><br>
<h2>{$title}</h2> 
<hr>
<div class="row">
	<div class="span2">
		<b>Description</b> 
	</div>
	<div class="span7">
		{$description}
	</div>
</div>
<div class="row">
	<div class="span2">
		<b>Release Date</b> 
	</div>
	<div class="span7">
		{$release}
	</div>
</div>
<div class="row">
	<div class="span2">
		<b>Genre</b> 
	</div>
	<div class="span7">
		{$genre}
	</div>
</div>
<hr>
<b>Characters</b><br />
{$characters}

<hr>

<b>Spoiler alert</b><br />
{$spoiler}
<p>{$adminRow}</p>

END;

}

//Close res and mysqli
$res->close(); 
$mysqli->close();

echo $header;
echo $content;
echo $footer;

?>