<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SeoSettingResource\Pages;
use App\Filament\Resources\SeoSettingResource\RelationManagers;
use App\Models\SeoSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SeoSettingResource extends Resource
{
    protected static ?string $model = SeoSetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';
    protected static ?string $navigationGroup = 'Settings';
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Page Identification')
                    ->description('Identify which page this SEO setting applies to.')
                    ->schema([
                        Forms\Components\TextInput::make('page_name')->required()->placeholder('e.g. Home Page'),
                        Forms\Components\TextInput::make('route_name')->label('Route Name (e.g., home)')->placeholder('home'),
                        Forms\Components\TextInput::make('url')->label('URL Path (e.g., /about)')->placeholder('/about'),
                    ])->columns(3),
                    
                Forms\Components\Section::make('General SEO (On-Page)')
                    ->schema([
                        Forms\Components\TextInput::make('title')->required()->maxLength(60),
                        Forms\Components\Textarea::make('description')->maxLength(160),
                        Forms\Components\Textarea::make('keywords')->label('Keywords (Comma separated)'),
                        Forms\Components\TextInput::make('canonical_url')->url(),
                        Forms\Components\TextInput::make('robots')->default('index, follow'),
                    ]),
                    
                Forms\Components\Section::make('Social Media (Open Graph & Twitter)')
                    ->schema([
                        Forms\Components\TextInput::make('og_title')->label('OG Title')->maxLength(60),
                        Forms\Components\Textarea::make('og_description')->label('OG Description')->maxLength(160),
                        Forms\Components\FileUpload::make('og_image')->label('OG Image')->image()->directory('seo'),
                        Forms\Components\Select::make('twitter_card')
                            ->options([
                                'summary' => 'Summary',
                                'summary_large_image' => 'Summary Large Image',
                            ])
                            ->default('summary_large_image'),
                    ]),
                    
                Forms\Components\Section::make('Advanced SEO')
                    ->schema([
                        Forms\Components\Textarea::make('schema_markup')
                            ->label('Schema Markup (JSON-LD)')
                            ->rows(5)
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page_name')->searchable(),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('route_name')->searchable(),
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
            'index' => Pages\ListSeoSettings::route('/'),
            'create' => Pages\CreateSeoSetting::route('/create'),
            'edit' => Pages\EditSeoSetting::route('/{record}/edit'),
        ];
    }
}
