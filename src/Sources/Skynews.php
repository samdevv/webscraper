<?php

namespace App\Sources;

use App\Scraper\Contracts\SourceInterface;

class Skynews implements SourceInterface
{
    public function getUrl(): string
    {
        return 'https://www.skysports.com/news-wire';
    }

    public function getName(): string
    {
        return 'skysports';
    }

    public function getWrapperSelector(): string
    {
        return '.news-list__figure  .news-list__body';
    }

    public function getTitleSelector(): string
    {
        return 'a .news-list__headline-link';
    }

    public function getDescSelector(): string
    {
        return 'a .news-list__snippet';
    }

    public function getDateSelector(): string
    {
        return 'label__timestamp';
    }

    public function getLinkSelector(): string
    {
        return 'a .news-list__headline-link';
    }

    public function getImageSelector(): string
    {
        return '.news-list__image';
    }
}
