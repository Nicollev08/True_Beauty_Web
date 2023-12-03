<?php

namespace App\Exports;

use App\Models\Category;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class CategoriesExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
   public function view(): View
   {
    return view('admin.categories.excel', [
        'categories' => Category::all(),
    ]);
   }
}
