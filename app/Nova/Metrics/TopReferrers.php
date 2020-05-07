<?php

namespace App\Nova\Metrics;

use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Partition;
use Spatie\Analytics\Period;

class TopReferrers extends Partition
{
    /**
     * The displayable name of the metric.
     *
     * @var string
     */
    public $name = 'Redirecionamentos';

    /**
     * Calculate the value of the metric.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {
        $analytics = \Analytics::fetchTopReferrers(Period::years(10), 5);

        $data = [];

        foreach ($analytics as $item) {
            $data[$item['url']] = $item['pageViews'];
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
        return 'top-referrers';
    }
}
