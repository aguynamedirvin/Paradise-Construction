<?php if(!defined('KIRBY')) exit ?>

title: Slide
pages: false
preview: parent
files: 
  type: image
  sortable: true
fields:
  title: Name
    label: Title
    type:  text
  background:
  	label: Image
  	type: select
  	options: images
  text:
    label: Text
    type:  textarea