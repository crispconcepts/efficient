<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
	<meta name="description" content="<?php echo $site->description()->html() ?>">
	<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

	<?
	echo css(
		array(
			'/assets/styles/css/styles.css',
			'/panel/assets/css/fontawesome.css'
		)
	)
	?>
</head>
<body>

<header am-Grid="normal" class="header cf" role="banner">
	<div am-Row>
		<div am-Col="16 panel white">
			<div class="content">
				<div am-Col="6 middle left nested" id="branding">
					<div class="content">
						<h1><a href="/home"><? echo $site->title() ?></a></h1>
					</div>
				</div>
				<div am-Col="10 middle right nested" id="navigation">
					<div class="content">
						<? snippet('menu'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>