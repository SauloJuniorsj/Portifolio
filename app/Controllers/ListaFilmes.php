<?php

namespace App\Controllers;
use App\Models\listaPacienteModel;
use CodeIgniter\Controller;

class ListaFilmes extends Controller {

    public function home() {
        echo view('templates/header');
        echo view('pages/moviegrid');
        echo view('templates/footer');
    }

}