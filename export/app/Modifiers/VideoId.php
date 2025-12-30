<?php

namespace App\Modifiers;

use Statamic\Modifiers\Modifier;

class VideoId extends Modifier
{
    /**
     * Extract the video ID from a YouTube or Vimeo URL.
     *
     * @param  mixed  $value  The URL string or field value
     * @param  array  $params Any parameters passed to the modifier
     * @param  array  $context The current context
     * @return string|null
     */
    public function index($value, $params, $context)
    {
        if (!is_string($value)) {
            return null;
        }

        // YouTube
        if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $value, $match)) {
            return $match[1];
        }

        // Vimeo
        if (preg_match('%(?:vimeo\.com/(?:channels/(?:\w+/)?|groups/(?:[^\/]*)/videos/|album/(?:\d+)/video/|video/|))(\d+)(?:[?&]\S*)?%i', $value, $match)) {
            return $match[1];
        }

        return $value; // Fallback to raw value
    }
}
