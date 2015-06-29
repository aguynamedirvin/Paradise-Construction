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
    width: 1/2
  display_title:
    label: Display Title
    type: toggle
    text: yes/no
    width: 1/2
  background:
  	label: Futured Slide Image
  	type: select
  	options: images
  button_text:
    label: Button Text
    type: text
    width: 1/4
  button_link:
    label: Button Link
    type: url
    width: 1/2
  button_style:
    label: Button Style
    type: select
    width: 1/4
    default: btn-solid
    options:
      btn-solid: Solid
      btn-line: Line
  text:
    label: Text
    type:  textarea