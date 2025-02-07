<?php

class ServiceController extends Controller
{

    public function index()
    {


        $dados = array();
        $dados['mensagem'] = 'Bem-vindo a ';

      

        $this->carregarViews('service', $dados);
    }
}
