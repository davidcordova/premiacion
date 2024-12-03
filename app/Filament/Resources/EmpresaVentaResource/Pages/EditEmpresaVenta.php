<?php

namespace App\Filament\Resources\EmpresaVentaResource\Pages;

use App\Filament\Resources\EmpresaVentaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEmpresaVenta extends EditRecord
{
    protected static string $resource = EmpresaVentaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
