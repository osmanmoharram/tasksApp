<?php

namespace App\Filament\Resources\BillOfQuantityResource\Pages;

use App\Filament\Resources\BillOfQuantityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBillOfQuantity extends EditRecord
{
    protected static string $resource = BillOfQuantityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
