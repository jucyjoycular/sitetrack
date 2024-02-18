<?php
namespace App\Exports;
use App\Models\SiteExpenseTransaction;
use Maatwebsite\Excel\Concerns\FromCollection;

class SiteExpenseTransactionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SiteExpenseTransaction::all();
    }
}
