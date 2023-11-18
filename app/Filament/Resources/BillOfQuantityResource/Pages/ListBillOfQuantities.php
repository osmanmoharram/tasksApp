<?php

namespace App\Filament\Resources\BillOfQuantityResource\Pages;

use App\Filament\Resources\BillOfQuantityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBillOfQuantities extends ListRecords
{
    protected static string $resource = BillOfQuantityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
