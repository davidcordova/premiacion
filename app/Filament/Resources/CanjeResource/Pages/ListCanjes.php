<?php

namespace App\Filament\Resources\CanjeResource\Pages;

use App\Filament\Resources\CanjeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCanjes extends ListRecords
{
    protected static string $resource = CanjeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
