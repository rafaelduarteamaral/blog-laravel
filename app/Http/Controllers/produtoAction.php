<?php

use App\Models\produtos;

class Deletar{

public function deletarProduto($id){
        $delete = Produtos::where('id', $id)->delete();
    }
}

?>