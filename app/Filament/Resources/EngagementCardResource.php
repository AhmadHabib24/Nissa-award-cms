<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EngagementCardResource\Pages;
use App\Filament\Resources\EngagementCardResource\RelationManagers;
use App\Models\EngagementCard;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EngagementCardResource extends Resource
{
    protected static ?string $model = EngagementCard::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->rows(3),
                Forms\Components\TextInput::make('icon')
                    ->label('Icon (Emoji)')
                    ->nullable(),
                Forms\Components\TextInput::make('link_url')
                    ->label('Link URL')
                    ->nullable(),
                Forms\Components\TextInput::make('link_text')
                    ->label('Link Text (e.g., Read More)')
                    ->nullable(),
                Forms\Components\Toggle::make('is_highlighted')
                    ->label('Highlight Card (Swoosh Effect)'),
                Forms\Components\TextInput::make('order')
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('icon'),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\IconColumn::make('is_highlighted')->boolean(),
                Tables\Columns\TextColumn::make('order')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEngagementCards::route('/'),
            'create' => Pages\CreateEngagementCard::route('/create'),
            'edit' => Pages\EditEngagementCard::route('/{record}/edit'),
        ];
    }
}
