<?php

namespace App\Exports;

use App\Models\Articulo;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\contracts\View\View;

class ArticulosExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('articulo.exportEXCEL',[
            'articulos' => Articulo::all()
        ]);
    }
}