<?php

$info = array(
  // #base, #link, #gradient-top, #gradient-bottom, #text
  'schemes' => array(
    '#CCCCCC,#666666,#333333,#444444,#000000' => t('Ash (Default)'),
    '#CCCCCC,#3e4967,#7b0f0f,#560b0b,#333333' => t('Red'),
  ),

  'copy' => array(
    'images/comment.gif',
    'images/search.gif',
    'images/bg.gif',
    'images/bg2.gif',
	'images/bg3.gif',
  ),

  // CSS files (excluding @import) to rewrite with new color scheme.
  'css' => array(
    'style.css',
  ),

  // Gradient added as dummy; this theme does not color images.
  'gradient' => array(0, 0, 1, 2),

  // Fill added as dummy; this theme does not color images.
  'fill' => array(
    'base' => array(0, 2, 1, 1),
  ),
  
  // Slice added as dummy; this theme does not color images.
  'slices' => array(
    'images/dummy.png'                      => array(0, 0, 1, 1),
  ),

  'blend_target' => '#ffffff',
  
    // Preview files.
  'preview_image' => 'color/preview.gif',
  'preview_css' => 'color/preview.css',

  // Base file for image generation, this is a dummy as the theme does 
  // not use color images.
  'base_image' => 'color/base.png',
  
);
