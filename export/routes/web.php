<?php

use Illuminate\Support\Facades\Route;

// Taxonomy Indices
Route::statamic('/calendar', 'calendar/index');
Route::statamic('/category', 'category/index');
Route::statamic('/photos', 'photos/index');
Route::statamic('/tags', 'tags/index');

Route::statamic('/calendar/feed.ics', 'calendar_feed', [
  'layout' => false,
  'content_type' => 'text/calendar'
]);