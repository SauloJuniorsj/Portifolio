<?php

namespace App\Models;

use CodeIgniter\Database;
use CodeIgniter\Model;

class Filme extends Model
{
    protected $table = 'Filmes';
    protected $primaryKey = 'id';
    protected $allowedFields = ["Nome, Ano, Nota"];
  
    public function getMovies($id_Filme = null) {
        if ($id_Filme === null) {
            return $this->findAll();
        }

        return $this->asArray()->where(['id' => $id_Filme])->first();
    }


}
?>