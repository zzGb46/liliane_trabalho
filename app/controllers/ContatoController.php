<?php

class ContatoController extends Controller
{

    public function index()
    {


        $dados = array();
        $dados['mensagem'] = 'Bem-vindo a ';

      

        $this->carregarViews('contato', $dados);
    }
}
