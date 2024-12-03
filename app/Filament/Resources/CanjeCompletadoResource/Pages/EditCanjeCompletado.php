<?php

namespace App\Filament\Resources\CanjeCompletadoResource\Pages;

use App\Filament\Resources\CanjeCompletadoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCanjeCompletado extends EditRecord
{
    protected static string $resource = CanjeCompletadoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
