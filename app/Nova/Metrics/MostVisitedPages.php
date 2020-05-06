<?php

namespace App\Nova\Metrics;

use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Partition;
use Spatie\Analytics\Period;

class MostVisitedPages extends Partition
{
    /**
     * The displayable name of the metric.
     *
     * @var string
     */
    public $name = 'Páginas mais visitadas';

    /**
     * Calculate the value of the metric.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {
        $pages = \Analytics::fetchMostVisitedPages(Period::years(10), 5);

        $data = [];

        foreach ($pages as $page) {
            $data[$page['pageTitle']] = $page['pageViews'];
        }

        return $this->result($data);
    }

    /**
     * Get the URI key for the metric.
     *
     * @return string
     */
    public function uriKey()
    {
        return 'most-visited-pages';
    }
}
