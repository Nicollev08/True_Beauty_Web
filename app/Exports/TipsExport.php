<?php

namespace App\Exports;

use App\Models\Tip;
use Maatwebsite\Excel\Concerns\FromCollection;

class TipsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Tip::all();
    }
}
