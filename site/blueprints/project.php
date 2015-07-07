<?php if(!defined('KIRBY')) exit ?>

# project blueprint

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
    width: 1/2
  location:
    label: Location
    type: text
    icon: map-marker
    width: 1/2
  before:
    label: Before Picture
    type: select
    options: images
    required: true
    width: 1/2
  after:
    label: After Picture
    type: select
    options: images
    required: true
    width: 1/2
  category:
    label: Category
    type: radio
    default: remodeling
    options:
      remodeling: New Construction and Remodeling
      roofing: Roofing
      landscaping: Landscaping
      paint: Texture and Complete Paint
      concrete: Concrete
      driveways: Driveways
      sidewalks: Sidewalks
      walkways: Walkways
      cement_slabs: Cement Slabs
      stamped_concrete: Stamped Concrete
  tags:
    label: Tags
    type:  tags
  text:
    label: Summary
    type:  textarea