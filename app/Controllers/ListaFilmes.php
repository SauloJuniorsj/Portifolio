<?php

namespace App\Controllers;

use App\Models\Filme;
use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;

class ListaFilmes extends Controller {

    use ResponseTrait;

    public function BuscarFilme($id_filme = null){
        $Filme = new Filme();

        $data = [
            'Filmes' => $Filme->getMovies($id_filme)
        ]; 
        echo($data);
        echo view('templates/header');
        echo view('pages/moviegrid', $data); //redirecionando pra page lista-paciente.html com os dados de id que vem do bd pro foreach funcionar
        echo view('templates/footer');
    }

    public function CriarFilme($id_filme = null){
        helper('form');

        $Filme = new Filme();
        
        $Filme->save([
                      'Nome' => $this->request->getVar('Nome'),
                      'Ano'  => $this->request->getVar('Ano'),
                      'Nota' => $this->request->getVar('Nota')
                    ]);    
        
        $data['Filmes'] = $Filme->getMovies($id_filme);
        return $this->BuscarFilme();
    }

    public function home() {
        echo view('templates/header');
        echo view('pages/moviegrid');
        echo view('templates/footer');
    }

}