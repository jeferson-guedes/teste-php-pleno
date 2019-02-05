<?php namespace App;

class Filter
{
    protected $text;
    protected $filter;

    public function __construct($text, $filterType)
    {
        $this->text = $text;
        $this->filter = $filterType;
    }

    public function getFilteredText()
    {
        return $this->filter->execute($this->text);
    }
}