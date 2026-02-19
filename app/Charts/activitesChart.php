<?php

namespace App\Charts;

use App\Models\categories;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class activitesChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $data = Categories::withCount('activities')->get();

        $this->labels($data->pluck('name'));
        $this->dataset('Activites', 'bar', $data->pluck('activities_count'));
    }
}
