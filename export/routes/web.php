<?php

use Illuminate\Support\Facades\Route;

// Route::statamic('articles', 'articles.index');

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);

Route::statamic('/calendar/feed.ics', 'calendar_feed', [
  'layout' => false,
  'content_type' => 'text/calendar'
]);
