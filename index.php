<?php include_once('settings.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title><?= $apptitle; ?></title>
		<meta http-equiv="ContentType" content="text/html; charset=utf8">
		<link type="image/x-icon" rel="icon" href="favicon.ico">
		<link type="image/x-icon" rel="shortcut icon" href="favicon.ico">
		<link type="text/css" rel="stylesheet" href="resources/style.css">
		<script type="text/javascript" src="resources/jquery-latest.js"></script>
		<script type="text/javascript" src="resources/common.js"></script>
	</head>
	<body onselectstart="return false;" <?php if($appnversionremind) { ?>onLoad="showhideit('info'); slideIT('#versionfull')"<?php } ?>>
		<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
					<div class="menu">
						<a class="cursor" onclick="showhideit('main')">Player</a>
						<a class="cursor" onclick="refreshSWF('#player','#player-holder')">Refresh</a>
						<a class="cursor" onclick="showhideit('links')">Links</a>
						<a class="cursor" onclick="showhideit('info')">Info</a>
					</div>
				</td>
				<td id="main">
					<div id="player-holder" style="margin-left: 110px; margin-top: 56px;">
						<object id="player" type="application/x-shockwave-flash" data="<?= $appflash; ?>" width="161" height="19">
							<param name="menu" value="false">
							<param name="movie" value="<?= $appflash; ?>">
							<param name="bgcolor" value="490644">
							<param name="FlashVars" value="mp3=<?= $appstream; ?>&amp13202692901&amp;autoplay=<?= $appautoplay; ?>&amp;volume=<?= $appvolume; ?>&amp;showvolume=<?= $appshowvolume; ?>&amp;showloading=<?= $appshowloading; ?>&amp;loadingcolor=490644&amp;bgcolor=490644&amp;bgcolor1=490644&amp;bgcolor2=490644&amp;slidercolor1=990099&amp;slidercolor2=990099&amp;sliderovercolor=800080&amp;buttonovercolor=800080&amp;textcolor=990099">
						</object>
					</div>
				</td>
				<td id="links" style="display: none;">
					<table border="0" cellspacing="2" cellpadding="2" align="center">
						<tr>
							<td class="tabs"><a class="cursor" onclick="window.open('http://radiohitmistery.net/', '_blank');">Site<a></td>
							<td class="tabs"><a class="cursor" onclick="window.open('http://radiohitmistery.net/e107_plugins/forum/forum.php', '_blank');">Forum<a></td>
							<td class="tabs"><a class="cursor" onclick="window.open('http://www.facebook.com/radio.hit.mistery', '_blank');">Facebook<a></td>
							<td class="tabs"><a class="cursor" onclick="window.open('http://www.facebook.com/groups/359618567408330/', '_blank');">Group<a></td>
							<td class="tabs"><a class="cursor" onclick="window.open('http://play.radiohitmistery.net:8006/live.m3u', '_blank');">Winamp<a></td>
						</tr>
						<tr>
							<td class="tabs"><a class="cursor" onclick="window.open('http://radiohitmistery.net/', '_blank');"><img src="resources/images/site.png"></a></td>
							<td class="tabs"><a class="cursor" onclick="window.open('http://radiohitmistery.net/e107_plugins/forum/forum.php', '_blank');"><img src="resources/images/site.png"></a></td>
							<td class="tabs"><a class="cursor" onclick="window.open('http://www.facebook.com/radio.hit.mistery', '_blank');"><img src="resources/images/facebook.png"></a></td>
							<td class="tabs"><a class="cursor" onclick="window.open('http://www.facebook.com/groups/359618567408330/', '_blank');"><img src="resources/images/group.png"></a></td>
							<td class="tabs"><a class="cursor" onclick="window.open('http://play.radiohitmistery.net:8006/live.m3u', '_blank');"><img src="resources/images/winamp.png"></a></td>
						</tr>
					</table>
				</td>
				<td id="info" style="display: none;">
					<div id="version" onclick="slideIT('#versionfull')">Version: <?= $appversion; ?></div>
					<div id="marquee">
						<div>
							<img src="<?= $applogo; ?>"><br />
							<?= $apptitle; ?><br /><br />
							Code and design: <?= $appauthor ?><br /><br />
							<?= $appcopyright; ?>
						</div>
					</div>
					<div id="versionfull" style="display: none;">
						<div class="titles">Version <?= $appseparator; ?> Info</div>
						<div class="exit" onclick="slideIT('#versionfull')"></div>
						<div id="versionfulltext">
							Current version: <?= $appversion; ?> <?= $appdate; ?>
							<br /><br />
							New version: <?= $appnversion; ?> <?= $appnversiondate; ?>
							<br /><br />
						</div>
						<?php if($appnversionbutton) { ?><input type="button" value="Download" class="buttons" onfocus="this.blur()" onclick="window.open('<?= $appnversionurl; ?>', '_self')"> <?php } ?><input type="button" value="Changelog" class="buttons" onfocus="this.blur()" onclick="slideIT('#versionlog')">
					</div>
					<div id="versionlog" style="display: none;">
						<div class="titles">Version <?= $appseparator; ?> Info <?= $appseparator; ?> Changelog</div>
						<div class="exit" onclick="slideIT('#versionlog')"></div>
						<div id="versionlogtext">
							<?= $appchangelog; ?>
						</div>
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>