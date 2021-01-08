<?php

namespace App\Imports;

use App\Models\Produtos;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class ProdutosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Produtos([
            'name' => $row['name'],
            'imagem' => Hash::make($row['imagem']),
            'descricao' => $row['descricao'],
            'categoria' => $row['categoria'],
            'text_prod' => $row['text_prod'],
        ]);
    }
}
