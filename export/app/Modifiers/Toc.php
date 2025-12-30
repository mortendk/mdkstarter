<?php

namespace App\Modifiers;

use Statamic\Modifiers\Modifier;

class Toc extends Modifier
{
    /**
     * Handle the TOC extraction or removal.
     *
     * Usage: 
     * {{ content | toc }}         -> Returns ONLY the TOC (stripped of inner tags like code)
     * {{ content | toc:strip }}   -> Returns content WITHOUT the TOC
     */
    public function index($value, $params, $context)
    {
        if (!is_string($value)) {
            return $value;
        }

        // More flexible pattern: match <ul> or <ol> with class="table-of-contents"
        $pattern = '/<(ul|ol)\b[^>]*class="[^"]*table-of-contents[^"]*"[^>]*>.*?<\/\1>/is';
        
        preg_match($pattern, $value, $matches);
        $toc = $matches[0] ?? '';

        if (collect($params)->contains('strip')) {
            return preg_replace($pattern, '', $value);
        }

        if ($toc) {
            $toc = preg_replace_callback('/(<a\b[^>]*>)(.*?)(<\/a>)/is', function($m) {
                return $m[1] . strip_tags($m[2]) . $m[3];
            }, $toc);
        }

        return $toc;
    }
}