<?php if(!defined('KIRBY')) exit ?>

# projects blueprint

title: Projects
pages:
  template: project
files: false

deletable: false

fields:
  title:
    label: Title
    type:  text
  summary:
    label: Summary
    type:  textarea