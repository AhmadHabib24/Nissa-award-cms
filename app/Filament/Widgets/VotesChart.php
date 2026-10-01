<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Vote;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class VotesChart extends ChartWidget
{
    protected static ?string $heading = 'Votes per Day';
    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $votes = Vote::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as count'))
            ->groupBy('date')
            ->orderBy('date')
            ->take(7)
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Votes Cast',
                    'data' => $votes->pluck('count')->toArray(),
                    'backgroundColor' => '#9D2254',
                    'borderColor' => '#9D2254',
                ],
            ],
            'labels' => $votes->pluck('date')->map(fn ($date) => Carbon::parse($date)->format('M d'))->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
