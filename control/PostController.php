<?php
include_once "models";
class PostController{
    public function acao($rotas){
        switch($rotas){
            case "posts":
                $this->viewPosts();
            case "formulario-post":
                $this->viewFormularioPost();
            case "cadastrar-post":
                $this->
        }
    }

    private function viewPosts(){
        include("views/posts.php");
    }


    private function viewFormularioPost(){
        include("views/newPost.php");
    }

    private function cadastroPost(){
        $descricao = $_POST['descricao'];
        $nomeArquivo = $_FILES['imagem']['name'];
        $linkTemp = $_FILE['imagem']['tmp_name'];
        $ = "views/img/$nomeAqruvio";
        move_uploaded_file($linkTemp, $caminhoSalvar);

        $post = new Post();
        $resultado = $post->criarPost($caminnhoSalvar, $descricao);

        if($resultado){
            header('Location:/fakeig/posts');
        }


    }

}
?>