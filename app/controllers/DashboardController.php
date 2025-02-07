<?php

class DashboardController extends Controller
{


    public function index()
    {

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['userId']) || !isset($_SESSION['userTipo'])) {

            header('Location:' . BASE_URL);
            exit;
        }

        $prof = new Professor();
        $dadosprof = $prof->buscarProf($_SESSION['userEmail']);

        $dados = array();
        $dados['titulo']        = 'Dashboard - Liliane';
        $dados['prof'] = $dadosprof;

        
        $this->carregarViews('dash/dashboard', $dados);
    }
}
