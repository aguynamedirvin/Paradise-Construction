<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  type: image
  sortable: true
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date
    type:  date
    default: today
    format: MM/YYYY
  before:
    label: Before Picture
    type: select
    options: images
    width: 1/2
  after:
    label: After Picture
    type: select
    options: images
    width: 1/2
  tags:
    label: Tags
    type:  tags
  text:
    label: Summary
    type:  textarea