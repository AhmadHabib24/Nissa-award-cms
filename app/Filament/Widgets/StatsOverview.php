<?php

namespace App\Filament\Widgets;

use App\Models\Nominee;
use App\Models\Vote;
use App\Models\SponsorInquiry;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Nominees', Nominee::count())
                ->description('Total registered nominees')
                ->descriptionIcon('heroicon-m-users')
                ->color('success')
                ->chart([7, 2, 10, 3, 15, 4, 17]),
            Stat::make('Total Votes', Vote::count())
                ->description('Votes across all categories')
                ->descriptionIcon('heroicon-m-check-badge')
                ->color('primary')
                ->chart([10, 20, 5, 30, 45, 20, 60]),
            Stat::make('Sponsorships', SponsorInquiry::count())
                ->description('Inquiries received')
                ->descriptionIcon('heroicon-m-banknotes')
                ->color('warning')
                ->chart([1, 2, 0, 1, 3, 2, 4]),
        ];
    }
}
