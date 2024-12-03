<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UbigeoPeruDepartmentResource\Pages;
use App\Filament\Resources\UbigeoPeruDepartmentResource\RelationManagers;
use App\Models\UbigeoPeruDepartment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UbigeoPeruDepartmentResource extends Resource
{
    protected static ?string $model = UbigeoPeruDepartment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUbigeoPeruDepartments::route('/'),
            'create' => Pages\CreateUbigeoPeruDepartment::route('/create'),
            'edit' => Pages\EditUbigeoPeruDepartment::route('/{record}/edit'),
        ];
    }
}
