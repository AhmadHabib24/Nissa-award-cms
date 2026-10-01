<?php

namespace App\Filament\Resources\SponsorInquiryResource\Pages;

use App\Filament\Resources\SponsorInquiryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSponsorInquiry extends EditRecord
{
    protected static string $resource = SponsorInquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
