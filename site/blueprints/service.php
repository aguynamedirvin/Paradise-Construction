<?php if(!defined('KIRBY')) exit ?>

title: Service
pages: false
preview: parent
files: 
  type: image
  sortable: true
fields:
  title: Service Name
    label: Title
    type:  text
  featured:
    label: Featured
    type: toggle
    text: yes/no
    default: no
    width: 1/2
  icon:
    label: Icon
    type: select
    width: 1/2
    options:
        bricks: Bricks
        brush: Brush
        helmet: Helmet
        home: Home
        layers: Layers
        tools: Tools
        shovel: Shovel
        ladder: Ladder
        cement-machine: Cement Machine
        stamped-concrete: Stamped Concrete
  text:
    label: Service Description
    type:  textarea