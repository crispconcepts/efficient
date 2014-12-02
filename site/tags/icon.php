<?php

kirbytext::$tags['icon'] = array(
  'attr' => array(
    'size',
    'fixed',
    'pull',
    'rotate',
    'flip',
    'stack',
    'border',
    'spin',
    'inverse',
    'rescale',
    'iconcolor',
    'stackcolor'
  ),
  'html' => function($tag) {

  	$html = '';

  	if($tag->attr('stack')):
  		$html .= '<span class="fa-stack';
    	if($tag->attr('size'))
    	$html .= ' fa-' . $tag->attr('size');
	  	$html .= '">';
	    $html .= '<i class="fa fa-' . $tag->attr('icon') . ' fa-stack-';
	    if($tag->attr('rescale') && $tag->attr('rescale') == 'true')  $html .= '1x'; else $html .= '2x';
    	if($tag->attr('inverse') && $tag->attr('inverse') == 'icon')  $html .= ' fa-inverse';
	    $html .= '"';
	    if($tag->attr('iconcolor')) $html .= 'style="color:' . $tag->attr('iconcolor') . '"';
	    $html .= '></i>';
	    $html .= '<i class="fa fa-' . $tag->attr('stack') . ' fa-stack-';
	    if($tag->attr('rescale') && $tag->attr('rescale') == 'true')  $html .= '2x'; else $html .= '1x';
    	if($tag->attr('inverse') && $tag->attr('inverse') == 'stack') $html .= ' fa-inverse';
	    $html .= '"';
	    if($tag->attr('stackcolor')) $html .= 'style="color:' . $tag->attr('stackcolor') . '"';
	    $html .= '></i>';
	    $html .= '</span>';
    else:
    	$html .= '<i class="fa fa-' . $tag->attr('icon');
    	if($tag->attr('size'))   $html .= ' fa-' . $tag->attr('size');
    	if($tag->attr('pull'))   $html .= ' pull-' . $tag->attr('pull');
    	if($tag->attr('rotate')) $html .= ' fa-rotate-' . $tag->attr('rotate');
    	if($tag->attr('flip'))   $html .= ' fa-flip-' . $tag->attr('rotate');
    	if($tag->attr('spin')   && $tag->attr('spin')   == 'true') $html .= ' fa-spin';
    	if($tag->attr('fixed')  && $tag->attr('fixed')  == 'true') $html .= ' fa-fw';
    	if($tag->attr('border') && $tag->attr('border') == 'true') $html .= ' fa-border';
    	$html .= '"></i>';
    endif;
    return $html;

  }
);

?>