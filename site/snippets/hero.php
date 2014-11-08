<?
$bg=""; $bg_url=""; $ftimg=""; $ftimg_url="";
if($content->hasImages()): foreach($content->images() as $image):
	if($image->name()=="background"):
		$bg				= "true";
		$bg_url			= $image->url();
		$bg_modified    = '?v=' . $image->modified('dmy-his');
	elseif($image->name()=="feature"):
		$ftimg			= "true";
		$ftimg_url		= $image->url();
		$ftimg_modified = '?v=' . $image->modified('dmy-his');
	endif;
endforeach; endif;
?>
<div am-Grid="full" class="hero cf" id="<? echo($content->slug()); ?>" <? if($bg=="true"): ?>style="background-image:url(<? echo c::get('cdnUrl') . $bg_url . $bg_modified ?>);"<? endif ?>>
	<div am-Row="fluid" class="cf">
		<div am-Col="16">
			<div class="content <? echo h($content->layout()) ?>">
				<? if($bg=="true" || $ftimg=="true"): ?>
				<div class="image">
					<? if($bg=="true"): ?><img src="<? echo c::get('cdnUrl') . $bg_url . $bg_modified ?>" style="visibility:hidden;" /><? endif ?>
					<? if($ftimg=="true"): ?><img src="<? echo c::get('cdnUrl') . $ftimg_url . $ftimg_modified ?>" /><? endif ?>
				</div>
				<? endif ?>
				<? if($content->copy()): ?>
				<div class="copy <? if($bg=="true" && $content->copy_position()=="absolute") echo 'absolute'; ?>">
					<? echo kirbytext($content->copy()) ?>
				</div>
				<? endif ?>
			</div>
		</div>
	</div>
</div>