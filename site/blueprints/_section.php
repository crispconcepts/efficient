<?php if(!defined('KIRBY')) exit ?>

title: Section (Grid)
pages:
  template:
    - _section_column
files: true
fields:
  title:
    label: Title
    type:  text
  span:
    label: Span
    type:  select
    options:
      normal:     Normal
      normal full: Normal (Full Width)
      table:      Table
      table full:  Table (Full Width)
    default: normal
  background:
    label: Background Image
    type:  text