<?php if(!defined('KIRBY')) exit ?>

# projects blueprint

title: Projects
pages:
  template: project
  sort: flip
  num: zero

files: false

deletable: false

fields:
  title:
    label: Title
    type:  text
  summary:
    label: Summary
    type:  textarea
  description:
    label: SEO Summary
    type: textarea
    buttons: false