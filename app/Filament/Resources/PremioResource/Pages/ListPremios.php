<?php

namespace App\Filament\Resources\PremioResource\Pages;

use App\Filament\Resources\PremioResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPremios extends ListRecords
{
    protected static string $resource = PremioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
