<?php

namespace App\Filament\Resources\EngagementCardResource\Pages;

use App\Filament\Resources\EngagementCardResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEngagementCard extends EditRecord
{
    protected static string $resource = EngagementCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
