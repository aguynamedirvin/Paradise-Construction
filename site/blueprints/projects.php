<?php if(!defined('KIRBY')) exit ?>

# projects blueprint

title: Projects
pages:
  template: project
  sort: flip
  num:
    mode: date
    field: date
    format: Ymd

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