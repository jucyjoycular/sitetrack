<?php

namespace App\Exports;
use App\Models\VehicleExpenseTransaction;
use Maatwebsite\Excel\Concerns\FromCollection;

class MachineryExpanseTransactionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return VehicleExpenseTransaction::all();
    }
}
