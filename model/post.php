<?php

include("model/connection.php");
    class Post extends Conexao{
       

        public function criarPost($imagem, $descricao){
            $db = parent::criarConexao(); //informando que vai acessar um método da clase pai no caso a conexao
            
            $query = $db->prepare("INSERT INTO fotos (img, descricao) VALUES(?,?)");

            return $query->execute([$imagem, $descricao]);
        }

        public function listarPosts(){
            $db = parent::criarConexao();
            $query = $db->query("SELECT * FROM fotos ORDER BY id DESC");
            $resultado = $query->FetchAll(PDO::FETCH_OBJ);//fetchall = pega todas as informações do banco
            //fetch_obj = retorna uma lista de objetos
            return $resultado;
        }
    }
?>