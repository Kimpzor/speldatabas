<?php
// Include the template!
include_once("inc/template.php");
include_once("inc/connection.php");

$content = <<<END

<div id="content">
<div class="pager">
  <ul>
		<li><a href="pc.php">PC</a></li>
		<li><a href="">Playstation</a></li>
		<li><a href="">Playstation 2</a></li>
		<li><a href="">Playstation 3</a></li>
		<li><a href="">PSP</a></li>
		<li><a href="">Vita</a></li>
		<li><a href="">Xbox</a></li>
		<li><a href="">Xbox 360</a></li>
		<li><a href="">Nintendo 64</a></li>
		<li><a href="">Nintendo Gamecube</a></li>
		<li><a href="">Wii</a></li>
		<li><a href="">Wii U</a></li>
		<li><a href="">Game Boy</a></li>
		<li><a href="">Nintendo DS</a></li>
		<li><a href="">Nintendo 3DS</a></li>
		<li><a href="">Dreamcast</a></li>
      </ul>
</div>
		</div>
END;

echo $header;
echo $content;
echo $footer;

?>