<?php

namespace App\Filament\Resources\UbigeoPeruProvinceResource\Pages;

use App\Filament\Resources\UbigeoPeruProvinceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUbigeoPeruProvinces extends ListRecords
{
    protected static string $resource = UbigeoPeruProvinceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
