<?php

namespace App\Filament\Resources\SponsorInquiryResource\Pages;

use App\Filament\Resources\SponsorInquiryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSponsorInquiries extends ListRecords
{
    protected static string $resource = SponsorInquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
