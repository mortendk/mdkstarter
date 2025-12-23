---
id: calendar-page-id
blueprint: page
title: Kalender
opengraph:
  og_type: article
seo_index: true
seo_follow: true
author: 8caaa812-4aca-4174-ac33-6e2dfa2a6d94
updated_by: 8caaa812-4aca-4174-ac33-6e2dfa2a6d94
updated_at: 1766450553
blocks:
  -
    id: mjhnrllx
    title: calendar
    collection: events
    section_width: w-full
    type: calendar
    enabled: true
    text: 'lorem text'
    selected_collection:
      - events
    number_of_entries: 12
    sorting: event_date
    direction: asc
    card_partial: cards/card-event
    layout_type_mobile: grid
    show_pagination_mobile: true
    layout_type_desktop: scroll
    show_pagination_desktop: true
    columns_mobile: grid-cols-2
    card_width_desktop: 'lg:w-96'
---
