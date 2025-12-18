---
id: home
blueprint: pages
title: 'Welcome to your new site'
template: home
author: 1de18103-586c-4e95-958d-e020043fc639
blocks:
  -
    id: mi2893xz
    markdown: |-
      # Hello World!
      
      This is a fresh install of the MDK Starter Kit.
    section_width: pagewidth
    type: markdown
    enabled: true
  -
    id: mhwiw9qj
    card_partial: cards/card
    number_of_entries: 4
    sorting: date
    direction: desc
    columns_mobile: grid-cols-2
    columns: 'lg:grid-cols-4'
    section_width: w-full
    type: cards
    enabled: true
    selected_collection:
      - articles
    title: 'Latest Articles'
    show_pagination: false
    layout_type: grid
    show_show_more_link: false
    layout_type_mobile: grid
    layout_type_desktop: grid
    show_pagination_desktop: false
    show_pagination_mobile: false
opengraph:
  og_type: website
seo_index: true
seo_follow: true
---
