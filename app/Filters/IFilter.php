<?php namespace App\Filters;

interface IFilter
{
    public function execute(String $text);
}