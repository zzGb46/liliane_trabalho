<?php

class SobreController extends Controller
{

    public function index()
    {


        $dados = array();
        $dados['mensagem'] = 'Bem-vindo a ';

      

        $this->carregarViews('sobre', $dados);
    }
}
