<?
if($content->background() && $content->background() != ''):
	$gridBgImg = $content->background();
	$gridBgUrl = $content->files()->find("$gridBgImg")->url();
endif;
?>

<div am-Grid="<? echo $content->span(); ?>" class="cf" <? e($gridBgImg,'style="background-image:url('.$gridBgUrl.'); background-size:cover; background-repeat:no-repeat; background-position:center center;"') ?> >
	<div am-Row>

<?
$spanCount = 0;
foreach($content->children()->visible() as $col):
	$colBgImg = '';
	$colBgUrl = '';
	if($col->background() && $col->background() != ''):
		$colBgImg = $col->background();
		$colBgUrl = $col->files()->find("$colBgImg")->url();
	endif;
	$span = h($col->span());
	if($spanCount+$span > 16):
		$spanCount = 0;
		$spanCount = $spanCount+$span;
?>

	</div>
	<div am-Row>
		<div id="<? echo $col->slug() ?>" am-Col="<? e($col->span(),h($col->span())) ?> <? e($col->span(),h($col->halign())) ?> <? e($col->span(),h($col->valign())) ?> <? e($col->panel()=='true', 'panel ' . h($col->panelcolor())) ?>" <? e($colBgImg && $col->panel()!='true','style="background-image:url('.$colBgUrl.'); background-size:cover; background-repeat:no-repeat; background-position:center center;"') ?> >
		<? e($col->panelcolorcustom()!='', '<style>#' . $col->slug() . ':after {background-color:' . $col->panelcolorcustom() . '!important;}</style>') ?>
			<div class="content">
				<? echo kirbytext($col->copy()) ?>
				<?
				foreach($col->children()->visible() as $colNest):
					$colNestBgImg = '';
					$colNestBgUrl = '';
					if($colNest->background() && $colNest->background() != ''):
						$colNestBgImg = $colNest->background();
						$colNestBgUrl = $colNest->files()->find("$colNestBgImg")->url();
					endif;
				?>
					<div am-Col="<? e($colNest->span(),h($colNest->span())) ?> <? e($colNest->halign(),h($colNest->halign())) ?> <? e($colNest->valign(),h($colNest->valign())) ?> <? e($colNest->panel()=='true', 'panel ' . h($colNest->panelcolor())) ?> nested"<? e($colNestBgImg && $colNest->panel()!='true','style="background-image:url('.$colNestBgUrl.'); background-size:cover; background-repeat:no-repeat; background-position:center center;"') ?> >
						<div class="content nested">
							<? echo kirbytext($colNest->copy()) ?>
						</div>
					</div>
				<? endforeach; ?>
			</div>
		</div>

<?
	else:
		$spanCount = $spanCount+$span;
?>

		<div id="<? echo $col->slug() ?>" am-Col="<? e($col->span(),h($col->span())) ?> <? e($col->span(),h($col->halign())) ?> <? e($col->span(),h($col->valign())) ?> <? e($col->panel()=='true', 'panel ' . h($col->panelcolor())) ?>" <? e($colBgImg && $col->panel()!='true','style="background-image:url('.$colBgUrl.'); background-size:cover; background-repeat:no-repeat; background-position:center center;"') ?> >
		<? e($col->panelcolorcustom()!='', '<style>#' . $col->slug() . ':after {background-color:' . $col->panelcolorcustom() . '!important;}</style>') ?>
			<div class="content">
				<? echo kirbytext($col->copy()) ?>
				<?
				foreach($col->children()->visible() as $colNest):
					$colNestBgImg = '';
					$colNestBgUrl = '';
					if($colNest->background() && $colNest->background() != ''):
						$colNestBgImg = $colNest->background();
						$colNestBgUrl = $colNest->files()->find("$colNestBgImg")->url();
					endif;
				?>
					<div am-Col="<? e($colNest->span(),h($colNest->span())) ?> <? e($colNest->halign(),h($colNest->halign())) ?> <? e($colNest->valign(),h($colNest->valign())) ?> <? e($colNest->panel()=='true', 'panel ' . h($colNest->panelcolor())) ?> nested"<? e($colNestBgImg && $colNest->panel()!='true','style="background-image:url('.$colNestBgUrl.'); background-size:cover; background-repeat:no-repeat; background-position:center center;"') ?> >
						<div class="content nested">
							<? echo kirbytext($colNest->copy()) ?>
						</div>
					</div>
				<? endforeach; ?>
			</div>
		</div>

<?
	endif;
endforeach;
?>

	</div>
</div>