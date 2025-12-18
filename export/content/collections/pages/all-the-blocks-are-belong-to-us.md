---
id: c157588d-31d6-46b1-a469-acf1f03c20c9
blueprint: page
title: 'All the blocks are belong to us'
opengraph:
  og_type: article
seo_index: true
seo_follow: true
author: 8caaa812-4aca-4174-ac33-6e2dfa2a6d94
blocks:
  -
    type: markdown
    markdown: |-
      # Welcome to the Block Party
      
      This page demonstrates all the available content blocks in the Starter Kit.
      
      ## Markdown Block
      This block allows you to write content using **Markdown**. You can include:
      * Lists
      * *Italics*
      * [Links](https://statamic.com)
      * And more.
    section_width: pagewidth
  -
    type: cards
    title: 'Cards Block (Articles)'
    text: 'This block displays a collection of entries as cards.'
    selected_collection:
      - articles
    card_partial: cards/card
    number_of_entries: 4
    layout_type_desktop: grid
    columns: 'lg:grid-cols-3'
    section_width: pagewidth
  -
    type: images
    title: 'Image Gallery Block'
    text: 'A grid of images.'
    layout: grid
    section_width: pagewidth
    images:
      - nika-benedictova-juiltreaok8-unsplash.jpg
      - nika-benedictova-oeyukjwt8_m-unsplash.jpg
      - person.jpg
  -
    type: responsive_image
    section_width: pagewidth
    image:
      src: ian-fajardo-jyg-bmemote-unsplash.jpg
      lg: ian-fajardo-jyg-bmemote-unsplash.jpg
  -
    type: video
    video: 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'
    section_width: pagewidth
  -
    type: files
    title: 'Files Block'
    text: 'Downloadable files.'
    section_width: pagewidth
    files: []
---