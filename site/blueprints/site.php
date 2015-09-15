<?php if(!defined('KIRBY')) exit ?>

# main site blueprint

title: Site
pages: default

fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type:  text
  description:
    label: Description
    type:  textarea
  free-estimate:
    label: Free Estimate Headline
    type: text
  line-a:
    type: line
  phone:
    label: Phone Number
    type: tel
    width: 1/2
  email:
    label: Email
    type: email
    width: 1/2
  address:
    label: Address
    type: text
    icon: map-marker
  working-hours:
    label: Working Hours
    type: textarea
  line-b:
    type: line
  facebook:
    label: Facebook
    type: text
    icon: facebook
    width: 1/2
  google_plus:
    label: Google Plus
    type: text
    icon: google-plus
    width: 1/2
  line-c:
    type: line
  keywords:
    label: Keywords
    type:  tags
  copyright:
    label: Copyright
    type:  textarea
  google-analytics:
    label: Google Analytics ID
    type: text