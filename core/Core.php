<?php

class Core
{


    //Método inicializar o processo de ROTAS
    public function executar()
    {

        $url = "/";

        // Verificar se variável URL está definida na $_GET
        if (isset($_GET['url'])) {
            $url .= $_GET['url'];
        }

        //var_dump($url);

        // Definindo um array para armazenar os parâmetros da URL
        $parametro = array();


        // Verifica se a URL não está vazia e não é apenas uma /
        if (!empty($url) && $url != '/') {

            //  servicos   /especialidade /nomeServico
            //  controller /ação          /parametro
            $url = explode('/', $url);
            //var_dump($url);
            //  servicos[0]
            //  especialidade[1]
            //  nomeServico=[2]

            array_shift($url);
            //var_dump($url);

            //$url[0]: Obter o contoller atual
            //ucfirst - Colocar a primeira letra em maiúscula
            //Concatenar 'Controller' ao nome para seguir o padrão
            $controladorAtual = ucfirst($url[0]) . 'Controller';
            //controladorAtual:  ServicosController

            //var_dump($controladorAtual);

            array_shift($url);
            //var_dump($url);
            //  especialidade[0]
            //  nomeServico=[1]


            //Verificar se existe uma ação na URL
            //isset — Determina se uma variável está declarada e é diferente de null
            //empty — Determina se uma variável está vazia
            if (isset($url[0]) && !empty($url[0])) {

                $acaoAtual = $url[0];
                //$acaoAtual = especialidade
                //var_dump("Nome da ação atual: " . $acaoAtual);
                array_shift($url);
            } else {
                $acaoAtual = 'index';
                //var_dump($acaoAtual);
            }

            // Os parametros
            //count — Conta todos os elementos de um array ou de um objeto Countable
            if (count($url) > 0) {
                $parametro = $url;
                //var_dump($parametro);
            }
        } else {

            $controladorAtual = 'HomeController';
            $acaoAtual = 'index';
            //var_dump('Controlador Atual: ' . $controladorAtual);
            //var_dump('Ação atual: ' . $acaoAtual);
        }

        // Verificando se o arquivo do CONTROLLER existe e se o método existe na class
        if (!file_exists('../app/controllers/' . $controladorAtual . '.php') || !method_exists($controladorAtual, $acaoAtual)) {

            // Se não existir defina o controller como ErroController
            $controladorAtual = 'ErroController';
            $acaoAtual = 'index';

            //var_dump('Controlador Atual: ' . $controladorAtual);
            //var_dump('Ação atual: ' . $acaoAtual);
        }

        //var_dump('Controlador Atual: ' . $controladorAtual);
        //var_dump('Ação atual: ' . $acaoAtual);

        // Instacia do controller atual
        $controller = new $controladorAtual();
        //var_dump($controller);

        //call_user_func_array — Chama uma função de retorno com um array de parâmetros
        call_user_func_array(array($controller, $acaoAtual), $parametro);
    }

    
}
