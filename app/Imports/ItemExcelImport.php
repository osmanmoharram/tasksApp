<?php

namespace App\Imports;

use App\Models\Item;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Facades\Excel;

class ItemExcelImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Item([
            'num' => $row[0],
            'uom' => $row[1],
            'description' => $row[2],
        ]);
    }

    public function headingRow(): int
    {
        return 2;
    }
}