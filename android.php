<?php
// Include the template!
include_once("inc/template.php");
include_once("inc/connection.php");

$content = <<<END

Text

END;

echo $header;
echo $content;
echo $footer;

?>