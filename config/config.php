<?php


//session start

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Definer URL base da aplicação 
define("BASE_URL","http://localhost/kioficina/public/"); // é uma função do php utilizada para criar constanste. Constante é um valor que não pode ser alterado durante a execução de um script.

//Confinguração do Data Base
define("DB_HOST","smpsistema.com.br");
define("DB_NAME","u283879542_liliane");
define("DB_USER","u283879542_liliane");
define("DB_PASS","Senac@liliane01");


//Configuração do email
define('EMAIL_HOST', 'smtp.hostinger.com');
define('EMAIL_PORT', '465');
define('EMAIL_USER', 'innovaclicktipi02@smpsistema.com.br');
define('EMAIL_PASS', 'Senac@tipi02');


// Sistema de autoload 'carregamento automático' das class 
spl_autoload_register(function ($classe){  

    if(file_exists('../app/controllers/'. $classe . '.php')){
                    //../app/controllers/HomeController.php
        require_once '../app/controllers/'. $classe .'.php';

    }

    if(file_exists ('../app/models/'. $classe .'.php')){
        require_once '../app/models/'. $classe .'.php';
        
    }
    
    if(file_exists ('../core/'. $classe .'.php')){
        require_once '../core/' . $classe .'.php';
        //var_dump($classe)

    }

});