<?php if(!defined('KIRBY')) exit ?>

title: Section (column)
pages:
  template:
    - _section_column
files: true
fields:
  title:
    label: Title
    type:  text
  copy:
    label: Content
    type:  textarea
  line-a:
    type: line
  span:
    label: Span
    type:  select
    icon:  columns
    options:
      1:  One
      2:  Two
      3:  Three
      4:  Four
      5:  Five
      6:  Six
      7:  Seven
      8:  Eight
      9:  Nine
      10: Ten
      11: Eleven
      12: Twelve
      13: Thirteen
      14: Fourteen
      15: Fifteen
      16: Sixteen
      auto: Auto / Fluid
    default: 16
  halign:
    label: Horizontal Align
    type:  select
    icon:  arrows-h
    width: 1/2
    options:
      left:   Left
      center: Center
      right:  Right
  valign:
    label: Vertical Align (only works with table grids)
    type:  select
    icon:  arrows-v
    width: 1/2
    options:
      top:    Top
      middle: Middle
      bottom: Bottom
  line-b:
    type: line
  background:
    label: Background Image
    type:  text
    icon:  image
  panel:
    label: Panel
    type:  toggle
    text: on/off
    default: false
  panelcolor:
    label: Panel Color
    type:  select
    width: 1/2
    icon:  eyedropper
    options:
      white:     White
      lightgray: Light Gray
      gray:      Gray
      darkgray:  Dark Gray
      black:     Black
    default: white
  panelcolorcustom:
    icon:  paint-brush
    label: Panel Custom Color (Overrides Panel Color)
    type:  text
    width: 1/2
