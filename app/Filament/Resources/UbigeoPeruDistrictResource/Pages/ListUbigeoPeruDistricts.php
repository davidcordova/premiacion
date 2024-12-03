<?php

namespace App\Filament\Resources\UbigeoPeruDistrictResource\Pages;

use App\Filament\Resources\UbigeoPeruDistrictResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUbigeoPeruDistricts extends ListRecords
{
    protected static string $resource = UbigeoPeruDistrictResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
