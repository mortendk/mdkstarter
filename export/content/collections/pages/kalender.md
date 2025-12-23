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
updated_at: 1766510769
blocks:
  -
    id: mjhnrllx
    title: calendar
    collection: events
    section_width: w-full
    type: calendar
    enabled: true
    text: lorem
    selected_collection:
      - events
    number_of_entries: 20
    sorting: event_date
    direction: asc
    card_partial: cards/card-event
    layout_type_mobile: grid
    show_pagination_mobile: false
    layout_type_desktop: grid
    show_pagination_desktop: true
    columns_mobile: grid-cols-2
    hide_past_events: false
    columns: 'lg:grid-cols-3'
    date_range:
      start: '2025-12-01'
      end: '2025-12-01'
    end_date: '2025-12-24'
---
