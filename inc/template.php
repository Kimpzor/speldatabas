<?php
session_start();

$adminHTML = "";
if(isset($_SESSION["username"])) {
	$adminHTML = <<<END
		<div id="admin-head">
			<p>Welcome, <b>{$_SESSION["username"]}</b> &nbsp; <a href="logout.php">Log out</a></p>
		</div>
END;
}

$header = <<<END

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>IGDb - Games, Apps and Characters</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="css/igdb.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/bootstrap.js"></script>
		<div id="wrapper">
			<!-- Header begins -->
			<header>
				<div class="row-fluid">
					<!-- Loggan -->
					<div class="span2">
						<h1><a href="index.php">IGDb</a></h1>
					</div>
					<!-- Loggan end -->
					<!-- Menu -->
					<div class="span6">
					<div id="menu">
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
							Games
							<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
								<li><a tabindex="-1" href="pc.php">PC</a></li>
								<li><a tabindex="-1" href="wii.php">Wii</a></li>
								<li><a tabindex="-1" href="ps3.php">PS3 </a></li>
								<li><a tabindex="-1" href="3ds.php">3DS</a></li>
								<li><a tabindex="-1" href="vita.php">VITA</a></li>
								<li><a tabindex="-1" href="wiiu.php">Wii U</a></li>
								<li><a tabindex="-1" href="x360.php">Xbox 360</a></li>
								<li class="dropdown-submenu">
									<a tabindex="-1" href="all.php">Show more</a>
									<ul class="dropdown-menu">
								<li><a tabindex="-1" href="ps1.php">PS</a></li>
								<li><a tabindex="-1" href="ps2.php">PS2</a></li>
								<li><a tabindex="-1" href="PSP.php">PSP</a></li>
								<li><a tabindex="-1" href="xbox.php">Xbox</a></li>
								<li><a tabindex="-1" href="gameb.php">Game Boy</a></li>
								<li><a tabindex="-1" href="ngc.php">Gamecube</a></li>
								<li><a tabindex="-1" href="dcast.php">Dreamcast</a></li>
								<li><a tabindex="-1" href="n64.php">Nintendo 64</a></li>
								<li><a tabindex="-1" href="nds.php">Nintendo DS</a></li>
									</ul>
								</li>	
								
							</ul>
						</div>
						
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
							Apps
							<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
								<li><a tabindex="-1" href="iphone.php">iPhone</a></li>
								<li><a tabindex="-1" href="android.php">Android</a></li>
							</ul>
						</div>
						
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
							News
							<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
								<li><a tabindex="-1" href="apps.php">Apps</a></li>
								<li><a tabindex="-1" href="games.php">Games</a></li>
							</ul>
						</div>
						
						<div class="btn-group">
							<a class="btn btn-mini" href="contact.php">
							Contact
							<span class=""></span>
							</a>
						</div>
						
						<div class="btn-group">
							<a class="btn btn-mini" href="login.php">
							Login
							<span class=""></span>
							</a>
						</div>
					</div>
					</div>
					<!-- Menu end -->
					<!-- Typ någon inloggning om vi hinner med det -->
					<div class="span3">
					{$adminHTML}
					</div>
				</div>
			</header>
			<!-- Header ends -->
					<div id="content">

END;

$footer = <<<END

					</div>
			<!-- Footer begins -->
			<footer>
				<hr>
				&copy;</a> 2013 Internet Game Database
			</footer>
			<!-- Footer ends -->
		</div>
	</body>
</html>

END;

?>