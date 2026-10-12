<?php

namespace App\Filament\Widgets;

use App\Models\Nominee;
use App\Models\Category;
use App\Models\Edition;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class VotingLeaderboardWidget extends BaseWidget
{
    protected static ?int $sort = 2;
    protected int | string | array $columnSpan = 'full';
    
    protected static ?string $heading = '🏆 Current Voting Leaderboard & Winning Status';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Nominee::query()
                    ->with(['category', 'edition'])
                    ->withCount('votes')
            )
            ->defaultSort('votes_count', 'desc')
            ->columns([
                Tables\Columns\ImageColumn::make('profile_photo')
                    ->label('Photo')
                    ->circular(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nominee Name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Category')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('info'),
                Tables\Columns\TextColumn::make('edition.year')
                    ->label('Edition')
                    ->sortable(),
                Tables\Columns\TextColumn::make('votes_count')
                    ->label('Votes Received')
                    ->sortable()
                    ->badge()
                    ->color('success'),
                Tables\Columns\TextColumn::make('standing')
                    ->label('Winning Situation')
                    ->state(function (Nominee $record): string {
                        // Get top nominee in this category and edition
                        $topNominee = Nominee::where('category_id', $record->category_id)
                            ->where('edition_id', $record->edition_id)
                            ->withCount('votes')
                            ->orderByDesc('votes_count')
                            ->first();

                        if (!$topNominee || $record->votes_count === 0) {
                            return 'No Votes Yet';
                        }

                        if ($topNominee->id === $record->id) {
                            return '🥇 Currently Winning (Rank #1)';
                        }

                        $diff = $topNominee->votes_count - $record->votes_count;
                        return "Trailing by {$diff} vote(s)";
                    })
                    ->badge()
                    ->colors([
                        'success' => fn ($state): bool => str_contains($state, 'Currently Winning'),
                        'warning' => fn ($state): bool => str_contains($state, 'Trailing'),
                        'gray' => fn ($state): bool => str_contains($state, 'No Votes Yet'),
                    ]),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->colors([
                        'warning' => 'pending',
                        'success' => 'approved',
                        'danger' => 'rejected',
                    ]),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('edition')
                    ->relationship('edition', 'year'),
                Tables\Filters\SelectFilter::make('category')
                    ->relationship('category', 'name'),
            ])
            ->paginated([5, 10, 25]);
    }
}
