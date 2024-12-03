<?php

namespace App\Filament\Resources\CanjeResource\Pages;

use App\Filament\Resources\CanjeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCanje extends EditRecord
{
    protected static string $resource = CanjeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
