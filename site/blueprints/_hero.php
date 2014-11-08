<?php if(!defined('KIRBY')) exit ?>

title: Section (Hero)
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
  copy:
    label: Content
    type:  textarea
  copy_position:
    label: Copy Position
    type:  select
    options:
      relative: Relative
      absolute: Absolute
    default: relative