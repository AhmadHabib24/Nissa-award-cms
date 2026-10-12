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
        $totalNominees = Nominee::count();
        $totalVotes = Vote::count();
        $validVotes = Vote::where('status', 'valid')->count();

        // Get current leading nominee
        $topNominee = Nominee::withCount('votes')
            ->orderByDesc('votes_count')
            ->first();

        return [
            Stat::make('Total Nominees', $totalNominees)
                ->description('Registered nominees across categories')
                ->descriptionIcon('heroicon-m-users')
                ->color('info'),
            Stat::make('Total Votes', $totalVotes)
                ->description("{$validVotes} valid votes recorded")
                ->descriptionIcon('heroicon-m-check-badge')
                ->color('primary'),
            Stat::make('Current Vote Leader', $topNominee ? "{$topNominee->name} ({$topNominee->votes_count} votes)" : 'None')
                ->description($topNominee && $topNominee->category ? $topNominee->category->name : 'No leader yet')
                ->descriptionIcon('heroicon-m-trophy')
                ->color('success'),
            Stat::make('Sponsorship Inquiries', SponsorInquiry::count())
                ->description('Inquiries received')
                ->descriptionIcon('heroicon-m-banknotes')
                ->color('warning'),
        ];
    }
}
