---
id: c157588d-31d6-46b1-a469-acf1f03c20c9
blueprint: page
title: 'All your stuff are belong to us'
opengraph:
  og_type: article
seo_index: true
seo_follow: true
author: 8caaa812-4aca-4174-ac33-6e2dfa2a6d94
blocks:
  -
    id: mjsf67cw
    title: 'image and text'
    image: alperen-yazgi-qup5rl_e5oe-unsplash.jpg
    text: 'lorem ...'
    cta:
      -
        id: mjsf6qxt
        button_title: 'button one'
        button_link: 'https://morten.dk'
        button_style: primary
        button_icon: alert
        type: icon_button
        enabled: true
    layout:
      image_placement_text_alignment: null
      image_placement: false
      content_layout: null
      vertical: justify-center
      horizontal: items-center
    section_width: pagewidth
    type: image_text
    enabled: true
  -
    id: mjsf7f01
    layout: gallery
    title: 'gallery stuff'
    text: 'and desciptio n'
    section_width: pagewidth
    type: photos
    enabled: true
    source_type: entry
    photo_entry: 8c3c9218-0107-48e8-8189-dca2643ce817
    photo_layout: grid
  -
    id: t4Q0ttTm
    type: video
    video: 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'
    section_width: pagewidth
    enabled: true
    source_type: entry
    title: 'rick roll'
    video_entry: 63b86466-4ed6-49d1-b1f2-a33c40ac0686
    content_markdown: 'lets roolll'
  -
    id: mudbYHQW
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
    enabled: true
  -
    id: 27AXD65f
    type: responsive_image
    section_width: pagewidth
    image:
      src: ian-fajardo-jyg-bmemote-unsplash.jpg
    enabled: true
  -
    id: QDcbk9GM
    type: files
    title: 'Files Block'
    text: 'Downloadable files.'
    section_width: pagewidth
    enabled: true
  -
    id: lhKvvVNO
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
    sorting: created_at
    direction: desc
    layout_type_mobile: grid
    show_pagination_mobile: true
    columns_mobile: grid-cols-1
    show_pagination_desktop: true
    enabled: true
updated_by: 8caaa812-4aca-4174-ac33-6e2dfa2a6d94
updated_at: 1767092772
title_card: 'page card'
image_card: ian-fajardo-jyg-bmemote-unsplash.jpg
teaser_card: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,'
template: page/page
---
