<?php

namespace App\Filament\Widgets;

use App\Models\Vote;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class RecentLogs extends BaseWidget
{
    protected static ?int $sort = 3;
    protected int | string | array $columnSpan = 'full';
    
    protected static ?string $heading = 'Recent Voting Logs';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Vote::with(['nominee', 'category'])->latest()->limit(5)
            )
            ->columns([
                Tables\Columns\TextColumn::make('nominee.name')
                    ->label('Nominee')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Category')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ip_address')
                    ->label('IP Address'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Voted At')
                    ->dateTime()
                    ->sortable(),
            ]);
    }
}
