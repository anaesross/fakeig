<?php 
    $rotas = key($_GET)?key($_GET):"posts"; //if ternário
    //caso o usuario digite o endereco do site, ele vai pra index , caso digite posts vai
    //para o post, etc....

    switch($rotas){
        case "posts": 
            include("control/PostController.php");
            $controller = new PostController(); //criando objto tipo controller
            $controller ->acao ($rotas); //acessar o metodo da classe criada , metodo 'acao'
        break;

        case "formulario-post": 
            include("control/PostController.php");
            $controller = new PostController();
            $controller ->acao ($rotas); //acessar o metodo da classe criada
        break;

        case "cadastrar-post": 
            include("control/PostController.php");
            $controller = new PostController();
            $controller ->acao ($rotas); //acessar o metodo da classe criada
        break;

    }

    
?>
