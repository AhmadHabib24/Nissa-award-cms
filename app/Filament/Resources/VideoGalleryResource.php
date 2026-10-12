<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VideoGalleryResource\Pages;
use App\Filament\Resources\VideoGalleryResource\RelationManagers;
use App\Models\VideoGallery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VideoGalleryResource extends Resource
{
    protected static ?string $model = VideoGallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-video-camera';
    protected static ?string $navigationGroup = 'Media';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Video Title')
                    ->placeholder('e.g. Nissa Awards 2025 Highlights')
                    ->maxLength(255)
                    ->columnSpanFull(),
                Forms\Components\Radio::make('type')
                    ->label('Video Source Type')
                    ->options([
                        'url' => 'External Link (YouTube / Vimeo / Video URL)',
                        'upload' => 'Upload Manual Video File (MP4, WebM)',
                    ])
                    ->default('url')
                    ->reactive()
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('video_url')
                    ->label('Video URL')
                    ->placeholder('https://www.youtube.com/watch?v=... or https://vimeo.com/...')
                    ->helperText('Paste a full YouTube, Vimeo, or direct MP4 link. System will automatically embed and fetch thumbnails.')
                    ->visible(fn (Forms\Get $get) => $get('type') === 'url')
                    ->required(fn (Forms\Get $get) => $get('type') === 'url')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('video_file')
                    ->label('Upload Video File')
                    ->directory('video-galleries')
                    ->acceptedFileTypes(['video/mp4', 'video/webm', 'video/ogg', 'video/quicktime'])
                    ->maxSize(51200) // 50MB
                    ->visible(fn (Forms\Get $get) => $get('type') === 'upload')
                    ->required(fn (Forms\Get $get) => $get('type') === 'upload')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('thumbnail')
                    ->label('Custom Cover / Thumbnail Image (Optional)')
                    ->image()
                    ->directory('video-thumbnails')
                    ->helperText('Optional. If left blank for YouTube videos, the YouTube thumbnail will be fetched automatically.')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('sort_order')
                    ->numeric()
                    ->default(0)
                    ->required(),
                Forms\Components\Toggle::make('is_active')
                    ->label('Visible on Website')
                    ->default(true)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Cover')
                    ->defaultImageUrl(fn (VideoGallery $record) => $record->display_thumbnail),
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->default('Untitled Video'),
                Tables\Columns\TextColumn::make('type')
                    ->badge()
                    ->colors([
                        'info' => 'url',
                        'warning' => 'upload',
                    ])
                    ->formatStateUsing(fn ($state) => strtoupper($state)),
                Tables\Columns\TextColumn::make('video_url')
                    ->label('Source / URL')
                    ->limit(40)
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('sort_order')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('sort_order', 'asc')
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->options([
                        'url' => 'External Link',
                        'upload' => 'Uploaded Video',
                    ]),
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active Status'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListVideoGalleries::route('/'),
            'create' => Pages\CreateVideoGallery::route('/create'),
            'edit' => Pages\EditVideoGallery::route('/{record}/edit'),
        ];
    }
}
