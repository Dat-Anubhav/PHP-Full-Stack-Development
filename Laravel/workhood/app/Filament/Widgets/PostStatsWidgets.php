<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;

class PostStatsWidgets extends ChartWidget
{
    protected ?string $heading = 'Total Posts Count';

    // Sets how wide the widget appears on the dashboard grid (e.g. 'full', 1, 2)
    protected int | string | array $columnSpan = 'full';

    protected function getData(): array
    {
        // Example: Grouping by the last 7 days including Aug 31 and Sep 1
        $days = collect(range(6, 0))->map(function ($daysAgo) {
            return Carbon::today()->subDays($daysAgo)->format('d M');
        });

        $counts = collect(range(6, 0))->map(function ($daysAgo) {
            $date = Carbon::today()->subDays($daysAgo)->toDateString();
            return Post::whereDate('created_at', $date)->count();
        });

        return [
            'datasets' => [
                [
                    'label' => 'Number of Posts',
                    'data' => $counts->toArray(),
                    'backgroundColor' => '#f59e0b', // Amber / Gold theme
                    'borderRadius' => 4,
                ],
            ],
            'labels' => $days->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}