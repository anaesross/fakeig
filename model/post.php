<?php

include("model/connection.php");
    class Post extends Conexao{
       

        public function criarPost($imagem, $descricao){
            $db = parent::criarConexao(); //informando que vai acessar um método da clase pai no caso a conexao
            
            $query = $db->prepare("INSERT INTO fotos (imagem, descricao) VALUES(?,?)");

            return $query->execute([$imagem, $descricao]);
        }
    }
?>