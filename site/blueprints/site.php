<?php if(!defined('KIRBY')) exit ?>

# main site blueprint

title: Site
pages: default

fields:
  title:
    label: Title
    type:  text
  description:
    label: SEO Introduction Text
    type: textarea
    buttons: false
  line-a:
    type: line
  free-estimate:
    label: Free Estimate Headline
    type: text
  free-estimate-summary:
    label: Free Estimate Summary
    type: text
  line-b:
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
    label: Street
    type: text
    icon: map-marker
    width: 1/2
  city:
    label: City
    type: text
    icon: map-marker
    width: 1/2
  state:
    label: State
    type: text
    icon: map-marker
    width: 1/2
  postal_code:
    label: Zip Code
    type: number
    icon: map-marker
    width: 1/2
  line-c:
    type: line
  working_hours:
    label: Working Hours
    type: textarea
  line-d:
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
  line-e:
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