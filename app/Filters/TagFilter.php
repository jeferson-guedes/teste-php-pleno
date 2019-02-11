<?php namespace App\Filters;

class TagFilter implements IFilter
{
    public function execute(String $text) : String
    {
        $text = preg_replace('#<\s*\b[^>]*>#', '',$text);
        $text = preg_replace('#</\b.*?>#', '',$text);
        
        return trim($text);
    }
}