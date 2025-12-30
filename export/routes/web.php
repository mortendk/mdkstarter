<?php

use Illuminate\Support\Facades\Route;

// Taxonomy Indices
Route::statamic('/calendar', 'calendar/index');
Route::statamic('/calendar/{calendar_group}/{url_date}', 'calendar/daily');
Route::statamic('/articles', 'articles/index');
Route::statamic('/posts', 'posts/index');
Route::statamic('/category', 'category/index');

Route::statamic('/photo', 'photos/index');
Route::statamic('/photo/{slug}', 'photos/term');
Route::statamic('/notifications', 'notifications/index');
Route::statamic('/notifications/type/{slug}', 'notifications/term');
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
