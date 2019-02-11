<?php namespace App\Filters;

class NumberFilter implements IFilter
{
    public function execute(String $text) : String
    {
        $text = preg_replace( '/([0-9]*\.[0-9]+|[0-9]+)/', '', $text);
        
        return trim($text);
    }
}