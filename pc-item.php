<?php

$page = isset($_GET["p"]) ? $_GET["p"] : ' ';
$page = urldecode($page);

include_once("inc/template.php");
include_once("inc/PCList.php");

if($page == '' || !array_key_exists($page, $pcList)) {
	header("Location: index.php");
exit();
}

$item = $pcList[$page];

$content = <<<END

	<div id="breadcrumbs">
		<a href="pc.php">PC</a> &gt; {$page}
	</div>
	<h1>{$page}</h1>
	<img src="{$item["image"]}" alt="" />
	<p class="col-right">{$item["desc"]}</p>

END;

echo $header;
echo $content;
echo $footer;

?>