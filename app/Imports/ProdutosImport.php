<?php

namespace App\Imports;

use App\Models\Produtos;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProdutosImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Produtos([
            'produto'   => $row['produto'],
            'descricao' => $row['descricao'],
            'categoria' => $row['categoria'],
            'texto_prod' => $row['texto_prod'],
        ]);
    }
}
