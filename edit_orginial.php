<?php 
date_default_timezone_set("Europe/Stockholm");
include_once("inc/template.php");

if(!isset($_SESSION["username"])) {
	header("Location: index.php");
	exit();
}

include_once("inc/connection.php");
$tablePost = "game";

$feedback = "";
$title 		= "";
$img 		= "";
$desc 		= "";
$genre 		= "";
$release 	= "";
$character 	= "";

$gameId = isset($_GET['pid']) ? $_GET['pid'] : '';

if(!empty($_POST)) {
	//Edit post or comment in DB 
	
	$title 		= isset($_POST['title']) ? $_POST['title'] : '';
	$img 		= isset($_POST['img']) ? $_POST['img'] : '';
	$desc 		= isset($_POST['desc']) ? $_POST['desc'] : '';
	$genre 		= isset($_POST['genre']) ? $_POST['genre'] : '';
	$release 	= isset($_POST['release']) ? $_POST['release'] : '';
	$character 	= isset($_POST['character']) ? $_POST['character'] : '';
	
	if($title == '' || $img == '' || $desc == '' || $genre == '' || $release == '' || $character == '') {
		$feedback = <<<END
		
			<p>Please fill out all forms!</p>
		
END;
	
	 } else if($gameId != "") {
		$gameId = $mysqli->real_escape_string($gameId);
		$type = "post";
		
		$query = <<<END
			UPDATE {$tablePost}
			SET gameName = '{$title}', gamePic = '{$img}', gameDesc = '{$desc}', gameGen = '{$genre}', gameRel = '{$release}', gameChar = '{$character}'
			WHERE gameId = {$gameId};
END;
	} 
	
	$mysqli->query($query) or die("Could not query database" . $mysqli->errno . " : " . $mysqli->error); //Performs query
	
	if($mysqli->affected_rows >= 1) {
		$feedback = "The game has been changed!";
		} else {
			$feedback = "Something wemt wrong and the game has not been changed!";
		}
		
		$mysqli->close();
		
} else { 

	if($type == "post") {
		$query = <<<END
			SELECT gameName, gamePic, gameDesc, gameGen, gameRel, gameChar
			FROM {$tablePost}
			WHERE gameId = {$gameId};
END;
	
	$res = $mysqli->query($query) or die("Could not query database" . $mysqli->errno . " : " . $mysqli->error); //Performs query
	
	if($res->num_rows < 1) {
		$content = <<<END
		<div id="container">
			<p> The {$type} that you have chosen can not be found!</p>
			<p><a href="pc.php">PC</a></p>
		</div>
END;
	} else {
		$row = $res->fetch_object();
		
		$title = ($type == "post") ? $row->gameName;
		$img = ($type == "post") ? $row->gamePic;
		$desc = ($type == "post") ? $row->gameDesc;
		$genre = ($type == "post") ? $row->gameGen;
		$release = ($type == "post") ? $row->gameRel;
		$character = ($type == "post") ? $row->gameChar;
		
		
		$title = utf8_decode($title);
		$img = utf8_decode($img);
		$desc = utf8_decode($desc);
		$genre = utf8_decode($genre);
		$release = utf8_decode($release);
		$character = utf8_decode($character);
		
		$content = getFormHTML($type, $gameId, $title, $img, $desc, $genre, $release, $character, $feedback);
	}
}
		
echo $header;
echo $content;
echo $footer;

function getFormHTML($gameId, $title, $img, $desc, $genre, $release, $character, $feedback) {
	$title = htmlspecialchars($title);
	$img = htmlspecialchars($img);
	$desc = htmlspecialchars($desc);
	$genre = htmlspecialchars($genre);
	$release = htmlspecialchars($release);
	$character = htmlspecialchars($character);
	
	return <<<END
			<div id="breadcrumbs">
				<p><a href="pc1.php?id={$gameId}">{$title}</a> &gt; Edit</p>
			</div>
			
			<h2>Edit {$title}</h2>
			{$feedback}
			<form action="edit.php?id={$gameId} method="post">
				<label for="name">Title:</label>
				<input type="text" id="name" name="name" value="{$title}" />
				<label for="name">Picture:</label>
				<input type="text" id="name" name="name" placeholder="Place image URL" value="{$img}" />
				<input type="text" id="adress" name="adress" />
				<label for="msg">Desciption:</label>
				<textarea id="msg" name="msg">{$desc}</textarea>
				<label for="name">Genre:</label>
				<input type="text" id="name" name="name" value="{$genre}" />
				<label for="name">Release date:</label>
				<input type="text" id="name" name="name" value="{$release}" />
				<label for="msg">Characters:</label>
				<textarea id="msg" name="msg">{$character}</textarea><br />
				<input type="submit" value ="Submit" />
			</form>
			
END;

}
?>