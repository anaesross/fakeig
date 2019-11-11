<?php
include_once ("model/post.php");
class PostController{
    public function acao($rotas){
        switch($rotas){
            case "posts":
                $this->listarPosts();
                break;
            case "formulario-post":
                $this->viewFormularioPost();
                break;
            case "cadastrar-post":
                $this->cadastrarPost();
                break;
        }
    }

    private function viewPosts(){
        include("views/posts.php");
    }


    private function viewFormularioPost(){
        include("views/newPost.php");
    }

    private function cadastrarPost(){
        $descricao = $_POST['descricao'];
        $nomeArquivo = $_FILES['img']['name'];
        $linkTemp = $_FILES['img']['tmp_name'];
        $caminhoSalvar = "views/img/$nomeArquivo";
        move_uploaded_file($linkTemp, $caminhoSalvar);
        $post = new Post();
        $resultado = $post->criarPost($caminhoSalvar, $descricao);

        if($resultado){
            echo  "<script>alert('Cadastrado com sucesso');</script>";
            header('Location:/fakeig/posts');
        }else{
            echo  "<script>alert('Não foi possível cadastrar');</script>";
        }  
    }    
    private function listarPosts(){
        $post = new Post(); // criando novo objeto para acessar as classses - para ser um objto tem que ter uma classe
        $listaPosts = $post->listarPosts();
        $_REQUEST['posts'] = $listaPosts; //$_REQUEST é uma super global
        $this->viewPosts(); //chama a página posts que está na linha 21
    }    
}
?>