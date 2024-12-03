<?php

namespace App\Filament\Resources\UbigeoPeruDepartmentResource\Pages;

use App\Filament\Resources\UbigeoPeruDepartmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUbigeoPeruDepartment extends EditRecord
{
    protected static string $resource = UbigeoPeruDepartmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
