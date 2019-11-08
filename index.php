<?php 
    $rotas = key($_GET)?key($_GET):"posts"; //if ternário
    //caso o usuario digite o endereco do site, ele vai pra index , caso digite posts vai
    //para o post


    switch($rotas){
        case "posts": 
            include("PostController.php");
            $controller = new PostController();
            $controller ->acao ($rotas); //acessar o metodo da classe criada
        break;
    }

?>
