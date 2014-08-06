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
$content	= "";
$gameId = isset($_GET['id']) ? $_GET['id'] : ''; // Determine if a variable is set and is not NULL

$s = 	isset($_GET['s'])	?	$_GET['s']	: ''; // Ja eller nej

if ($gameId == '') {	
	$content = <<<END
			<div id="breadcrumbs">
				<p><a href="pc1.php?id={$gameId}">{$title}</a> &gt; Delete</p>
			</div><!-- breadcrumbs -->
			<div id="container">
				<p>No game has been chosen.  Please try again. </p>
			</div><!--container -->	
END;

} else if ($s != 'y') {
	$query = "";
	
	if ($gameId != "") {
		$gameId		=$mysqli->real_escape_string($gameId);
		
		//SQL query
		$query = <<<END

		
		DELETE FROM {$tableGame}
		WHERE postId = {$gameId};

END;

	} 
	
	
	}
	
	/* Get result */
		$title = $row->gameName;
		$img = $row->gamePic;
		$desc = $row->gameDesc;
		$genre = $row->gameGen;
		$release = $row->gameRel;
		$character = $row->gameChar;
		$spoiler = $row->gameSpoil;
	
	if($mysqli->affected_rows >= 1) {
		$feedback = "The {$title} has been removed.";
	} else {
		$feedback = "Something went wrong and the {$title} was not removed.";
		}
	//$mysqli->close;
	
	$content = <<<END
		<div id="breadcrumbs">
			<p><a href="pc1.php?id={$gameId}">{$title}</a> &gt; Delete</p>
		</div><!-- breadcrumbs" -->
		<div id="container">
			<p>{$feedback}</p>
			<p><a href="pc1.php?id={$gameId}">{$title}Back to guestbook</a></p>
		</div><!-- container -->
END;

 {
	
	$content = <<<END
			<div id="breadcrumbs">
				<p><a href="pc1.php?id={$gameId}">{$title}</a> &gt; Delete</p>
			</div><!--breadcrumbs-->
			<div id="container">
				<p>Are you sure you want to remove the chosen {$title}?</p>
				<p><a href="delete.php?pid={$gameId}&s=y">Yes</a></p>
			</div><!-- container -->

END;
}

echo $header;
echo $content;
echo $footer;
			
?>