<?php

class AlunoController extends Controller
{

    public function index()
    {


        $dados = array();
        $dados['mensagem'] = 'Bem-vindo a ';

      

        $this->carregarViews('aluno', $dados);
    }
}
