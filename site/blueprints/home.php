<?php if(!defined('KIRBY')) exit ?>

# homepage blueprint

title: Home
pages: false

fields:
  title:
    label: Title
    type:  text
  introduction:
    label: Introduction
    type: textarea
  line-1:
    type: line
  service1_title:
    label: Service One Title
    type: text
    width: 1/2
  service1_summary:
    label: Service One Summary
    type: textarea
    width: 1/2
  line-2:
    type: line
  service2_title:
    label: Service Two Title
    type: text
    width: 1/2
  service2_summary:
    label: Service Two Summary
    type: textarea
    width: 1/2
  line-3:
    type: line
  service3_title:
    label: Service Three Title
    type: text
    width: 1/2
  service3_summary:
    label: Service Three Summary
    type: textarea
    width: 1/2