<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PastWinnerResource\Pages;
use App\Filament\Resources\PastWinnerResource\RelationManagers;
use App\Models\PastWinner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PastWinnerResource extends Resource
{
    protected static ?string $model = PastWinner::class;

    protected static ?string $navigationIcon = 'heroicon-o-trophy';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required()->maxLength(255)->label('Brand/Winner Name'),
                Forms\Components\Select::make('category_name')
                    ->label('Category Won')
                    ->options(\App\Models\Category::pluck('name', 'name'))
                    ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('edition_name')->required()->maxLength(255)->label('Edition (e.g., Nissa Awards 2025)'),
                Forms\Components\FileUpload::make('image')->image()->directory('past-winners'),
                Forms\Components\Toggle::make('is_active')->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('category_name')->searchable(),
                Tables\Columns\TextColumn::make('edition_name')->searchable(),
                Tables\Columns\IconColumn::make('is_active')->boolean(),
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
            'index' => Pages\ListPastWinners::route('/'),
            'create' => Pages\CreatePastWinner::route('/create'),
            'edit' => Pages\EditPastWinner::route('/{record}/edit'),
        ];
    }
}
