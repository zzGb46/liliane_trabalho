<?php

class HomeController extends Controller
{

    public function index()
    {


        $dados = array();
        $dados['mensagem'] = 'Bem-vindo a Lash gold';



        // Carregar os cursos
        $cursoModel = new Curso();
        $curso = $cursoModel->getCursos(2);
        $dados['cursos'] = $curso;
        

        // Carregar os depoimentos
        $depoimentoModel = new Depoimento();
        $depoimento = $depoimentoModel->getTodosDepoimentos();
        $dados['depoimentos'] = $depoimento;

        $this->carregarViews('home', $dados);
    }
}
