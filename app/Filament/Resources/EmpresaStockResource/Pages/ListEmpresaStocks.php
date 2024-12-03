<?php

namespace App\Filament\Resources\EmpresaStockResource\Pages;

use App\Filament\Resources\EmpresaStockResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEmpresaStocks extends ListRecords
{
    protected static string $resource = EmpresaStockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
