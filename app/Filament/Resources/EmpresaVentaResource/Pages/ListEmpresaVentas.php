<?php

namespace App\Filament\Resources\EmpresaVentaResource\Pages;

use App\Filament\Resources\EmpresaVentaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEmpresaVentas extends ListRecords
{
    protected static string $resource = EmpresaVentaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
