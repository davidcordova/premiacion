<?php

namespace App\Filament\Resources\UbigeoPeruDistrictResource\Pages;

use App\Filament\Resources\UbigeoPeruDistrictResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUbigeoPeruDistrict extends EditRecord
{
    protected static string $resource = UbigeoPeruDistrictResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
