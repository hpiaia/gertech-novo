<?php

namespace App\Nova\Metrics;

use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Trend;
use Laravel\Nova\Metrics\TrendResult;
use Spatie\Analytics\Period;

class PageViewsPerDay extends Trend
{
    /**
     * The displayable name of the metric.
     *
     * @var string
     */
    public $name = 'Visualizações diárias';

    /**
     * Calculate the value of the metric.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {
        $analytics = \Analytics::fetchTotalVisitorsAndPageViews(
            Period::days($request->get('range'))
        );

        $data = [];

        foreach ($analytics as $item) {
            $data[$item['date']->format('d/m/Y')] = $item['pageViews'];
        }

        return (new TrendResult())->trend($data)->showLatestValue();
    }

    /**
     * Get the ranges available for the metric.
     *
     * @return array
     */
    public function ranges()
    {
        return [
            7 => '7 dias',
            15 => '15 dias',
            30 => '30 dias',
            60 => '60 dias',
            90 => '90 dias',
        ];
    }

    /**
     * Get the URI key for the metric.
     *
     * @return string
     */
    public function uriKey()
    {
        return 'page-views-per-day';
    }
}
