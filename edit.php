<?php 
date_default_timezone_set("Europe/Stockholm"); // svensk tidzon
include_once("inc/template.php"); // inkluderar template med html

if(!isset($_SESSION["username"])) { // Determine if a variable is set and is not NULL
	header("Location: index.php");
	exit();
}

include_once("inc/connection.php"); // inkluderar mysql detaljer

/* definerar variable */
$tableGame = "game";
$feedback 	= "";
$title 		= "";
$img 		= "";
$desc 		= "";
$genre 		= "";
$release 	= "";
$character 	= "";
$spoiler 	= "";
$content	= "";
$gameId = isset($_GET['id']) ? $_GET['id'] : ''; // Determine if a variable is set and is not NULL

/* Determine if a variable is set and is not NULL */
if(!empty($_POST)) {
	$title 		= isset($_POST['title']) ? $_POST['title'] : '';
	$img 		= isset($_POST['img']) ? $_POST['img'] : '';
	$desc 		= isset($_POST['desc']) ? $_POST['desc'] : '';
	$genre 		= isset($_POST['genre']) ? $_POST['genre'] : '';
	$release 	= isset($_POST['release']) ? $_POST['release'] : '';
	$character 	= isset($_POST['character']) ? $_POST['character'] : '';
	$spoiler 	= isset($_POST['spoiler']) ? $_POST['spoiler'] : '';
	
	/* om något är tomt ges ett felmeddelande */
	if($title == '' || $img == '' || $desc == '' || $genre == '' || $release == '' || $character == '' || $spoiler == '') {
		$feedback = <<<END
		
			<p>Please fill out all fields!</p>
		
END;
		/* Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection */
	 } else if($gameId != "") {
		$gameId = $mysqli->real_escape_string($gameId);
		
		/* kontaktar databasen */
		$query = <<<END
			UPDATE {$tableGame}
			SET gameName = '{$title}', gamePic = '{$img}', gameDesc = '{$desc}', gameGen = '{$genre}', gameRel = '{$release}', gameChar = '{$character}', gameSpoil = '{$spoiler}'
			WHERE gameId = {$gameId};
END;

		/* feedback, antingen har det ändrats eller så gick något fel */
	if($res =$mysqli->query($query) or die("Could not query database" . $mysqli->errno . " : " . $mysqli->error)) {
		$feedback = "The game has been changed!";
		} else {
			$feedback = "Something wemt wrong and the game has not been changed!";
		}
		$content = <<<END
		<div id="container">
			<p> {$feedback}</p>
			<p><a href="pc.php">PC</a></p>
		</div>
END;
		$mysqli->close(); // Close
	}	
} else { 

		$query = <<<END
			SELECT gameName, gamePic, gameDesc, gameGen, gameRel, gameChar, gameSpoil
			FROM {$tableGame}
			WHERE gameId = {$gameId};
END;
	
	$res = $mysqli->query($query) or die("Could not query database" . $mysqli->errno . " : " . $mysqli->error); //Performs query
	
	/* om spelet kan inte hittas */
	if($res->num_rows < 1) {
		$content = <<<END
		<div id="container">
			<p> The game that you have chosen can not be found!</p>
			<p><a href="pc.php">PC</a></p>
		</div>
END;
	} else {
		$row = $res->fetch_object(); // Returns the current row of a result set as an object
		
		/* Get result */
		$title = $row->gameName;
		$img = $row->gamePic;
		$desc = $row->gameDesc;
		$genre = $row->gameGen;
		$release = $row->gameRel;
		$character = $row->gameChar;
		$spoiler = $row->gameSpoil;
		
		/* Converts a string with ISO-8859-1 characters encoded with UTF-8 to single-byte ISO-8859-1 */
		$title = utf8_decode($title);
		$img = utf8_decode($img);
		$desc = utf8_decode($desc);
		$genre = utf8_decode($genre);
		$release = utf8_decode($release);
		$character = utf8_decode($character);
		$spoiler = utf8_decode($spoiler);
		
		$content = getFormHTML($gameId, $title, $img, $desc, $genre, $release, $character, $spoiler, $feedback);
	}
$res->close(); // Close
$mysqli->close(); // Close

}		
echo $header; // printar header
echo $content; // printar content
echo $footer; // printar footer

/* funktion &  Convert special characters to HTML entities */
function getFormHTML($gameId, $title, $img, $desc, $genre, $release, $character, $spoiler, $feedback) {
	$title = htmlspecialchars($title);
	$img = htmlspecialchars($img);
	$desc = htmlspecialchars($desc);
	$genre = htmlspecialchars($genre);
	$release = htmlspecialchars($release);
	$character = htmlspecialchars($character);
	$spoiler = htmlspecialchars($spoiler);
	
	/* formluär & ger tillbaka feedback */
	return <<<END
			<div id="breadcrumbs">
				<p><a href="pc1.php?id={$gameId}">{$title}</a> &gt; Edit</p>
			</div>
			
			<h2>Edit {$title}</h2>
			{$feedback}
			<form action="edit.php?id={$gameId}" method="post">
				<label for="title">Title:</label>
				<input type="text" id="title" name="title" value="{$title}" />
				<label for="img">Picture:</label>
				<input type="text" id="img" name="img" placeholder="Place image URL" value="{$img}" />
				<input type="text" id="adress" name="adress" />
				<label for="desc">Desciption:</label>
				<textarea id="desc" name="desc">{$desc}</textarea>
				<label for="genre">Genre:</label>
				<input type="text" id="genre" name="genre" value="{$genre}" />
				<label for="release">Release date:</label>
				<input type="text" id="release" name="release" value="{$release}" />
				<label for="character">Characters:</label>
				<textarea id="character" name="character">{$character}</textarea><br />
				<label for="spoiler">Spoiler:</label>
				<textarea id="spoiler" name="spoiler">{$spoiler}</textarea><br />
				<input type="submit" value ="Submit" />
			</form>
			
END;

}
?>