<?php

namespace App\Controllers;

use App\Models\Filme;
use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;

class ListaFilmes extends Controller {

    use ResponseTrait;

    public function BuscarFilme(){
        $Filme = new Filme();
        dd($Filme->findAll());
    }

    public function CriarFilme($id_filme = null){
        helper('form');

        $Filme = new Filme();

        $Filme->save(['Nome' => $this->request->getPost('Nome'),
                      'Ano'  => $this->request->getPost('Ano'),
                      'Nota' => $this->request->getPost('Nota')
                    ]);    
         print_r($this->input->post());
        $data['Filmes'] = $Filme->getMovies($id_filme);
        return $this->BuscarFilme();
    }

    public function home() {
        echo view('templates/header');
        echo view('pages/moviegrid');
        echo view('templates/footer');
    }

}