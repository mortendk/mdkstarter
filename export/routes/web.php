<?php

use Illuminate\Support\Facades\Route;

// Taxonomy Indices
Route::statamic('/calendar', 'calendar/index');
Route::statamic('/category', 'category/index');
Route::statamic('/calendar/{calendar_group}/{url_date}', 'calendar/daily');

Route::statamic('/photo', 'photo/index');
Route::statamic('/photo/{slug}', 'photo/term');
Route::statamic('/video', 'videos/index');
Route::statamic('/video/{slug}', 'videos/term');
Route::statamic('/tags', 'tags/index');

Route::statamic('/manifest.webmanifest', 'manifest', [
  'layout' => false,
  'content_type' => 'application/manifest+json'
]);

Route::statamic('/calendar/feed.ics', 'calendar_feed', [
  'layout' => false,
  'content_type' => 'text/calendar'
]);
