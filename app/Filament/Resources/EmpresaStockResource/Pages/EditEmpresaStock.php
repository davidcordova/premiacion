<?php

namespace App\Filament\Resources\EmpresaStockResource\Pages;

use App\Filament\Resources\EmpresaStockResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEmpresaStock extends EditRecord
{
    protected static string $resource = EmpresaStockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
