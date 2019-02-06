<?php

use PHPUnit\Framework\TestCase;

use App\Filter;
use App\Filters\TagFilter;
use App\Filters\NumberFilter;

class AppTest extends TestCase
{
    /**
     * @dataProvider textProvider
     */
    public function testFilterXSSMessage($input, $output)
    {
        $filter = new Filter($input, new TagFilter());

        $this->assertEquals($output, $filter->getFilteredText());
    }

    public function textProvider()
    {
        return [
            ['text<script>alert(document.cookie)</script>', 'textalert(document.cookie)'],
            ['text<script> moretext', 'text moretext'],
            ['<h2>Text inside </h2>text outside', 'Text inside text outside'],
            ['<thisisnotatag>', '']
        ];
    }

    public function testFilterXSSNumbers()
    {
        $filter = new Filter('text12345 1234 2.34', new NumberFilter());

        $this->assertEquals('text', $filter->getFilteredText());
    }
}