<?php

namespace App\Filament\Resources\PremioResource\Pages;

use App\Filament\Resources\PremioResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPremio extends EditRecord
{
    protected static string $resource = PremioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
