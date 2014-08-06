<?php

date_default_timezone_set("Europe/Stockholm");

include_once("inc/template.php");
include_once("inc/connection.php");

$tablePost = "game";

$pcList = array();
$query = <<<END
SELECT gameId, gameName, gameDesc, gameGen, gameRel, gameChar 
FROM {$tablePost};
END;

/*$pcList = Array(
				"Bioshock Infinite" => Array(
					"image"		=> "img/bioinf.jpeg",
					"desc"		=> "Utbildningar går här"
				),
				"Super Maria" => Array(
					"image"		=> "images/work.gif",
					"desc"		=> "Arbete går här"
				),
				"Intressen" => Array(
					"image"		=> "images/int.gif",
					"desc"		=> "Intressen går här"
				)
);
*/
$content = '<div id="continer">';

foreach($query as $row) {
	$pcList[] = $row['gameName'];
	$urlKey = urlencode($key);
	$content .= <<<END
		<div class="listItem">
			<a href="pc-item.php?p={$key}">
			<img src="{$item["image"]}" alt="" />
			<p>{$key}</p>
			</a>
		</div>

END;
	}

$content .= "</div>";

echo $header;
echo $content;
echo $footer;

?>