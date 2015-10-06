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
  featured:
    label: Featured Picture
    type: select
    options: images
    required: true
    default: 
  category:
    label: Category
    type: radio
    default: remodeling
    options: query
    query:
      page: services
      value: '{{title}}'
  tags:
    label: Tags
    type:  tags
  text:
    label: Summary
    type:  textarea
    description:
  label: SEO Summary
    type: textarea
    buttons: false