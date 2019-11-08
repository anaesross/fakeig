<?php
include_once ("model/post.php");
class PostController{
    public function acao($rotas){
        switch($rotas){
            case "posts":
                $this->viewPosts();
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
        $linkTemp = $_FILE['img']['tmp_name'];
        $caminhoSalvar = "views/img/$nomeArquivo";
        move_uploaded_file($linkTemp, $caminhoSalvar);

        $post = new Post();
        $resultado = $post->criarPost($caminhoSalvar, $descricao);

        if($resultado){
            header('Location:/fakeig/posts');
        }


    }

}
?>