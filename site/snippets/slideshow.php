<div am-Grid="full" class="cf" id="slideshow">
	<div am-Row="fluid">
		<ul class="slideshow placeholder">
			<? foreach($content->children()->visible()->limit(1) as $slide): ?>
				<li am-Col="16" class="">
					<div class="content">
						<h1><? echo $slide->title() ?></h1>
					</div>
				</li>
			<? endforeach ?>
		</ul>
		<ul class="slideshow launchpad hide">
			<? foreach($content->children()->visible() as $slide): ?>
				<li am-Col="16" class="">
					<div class="content">
						<h1><? echo $slide->title() ?></h1>
					</div>
				</li>
			<? endforeach ?>
		</ul>
	</div>
</div>