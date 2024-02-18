<?php

namespace App\Imports;
use App\Models\VehicleExpenseTransaction;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MachineryExpenseTransactionImport implements ToModel
{
    public function model(array $row)
    {
        return new VehicleExpenseTransaction([
            'date'     => $row[0],
            'code'    => $row[1],
            'ref_1'    => $row[2],
            'ref_2'    => $row[3],
            'description'    => $row[4],
            'debt'    => $row[5],
            'credit'    => $row[6],
        ]);
    }
}
