<?php

namespace App\Filament\Resources\UbigeoPeruDepartmentResource\Pages;

use App\Filament\Resources\UbigeoPeruDepartmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUbigeoPeruDepartments extends ListRecords
{
    protected static string $resource = UbigeoPeruDepartmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
