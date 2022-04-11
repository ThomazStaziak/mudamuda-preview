<?php
    if ($_POST) {
        var_dump($_POST);

        try {
            require "conexao.php";
            
            $consulta = $conexao->prepare("INSERT INTO pedidos (created_at, pedido) VALUES (:created_at, :pedido)");
            $inseriu = $consulta->execute([
                ':created_at' => date('Y-m-d'),
                ':pedido' => $_POST
            ]);
    
            $conexao = null;
    
            if ($inseriu) {
                header("Location: panel.php");
            } 
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    } else {
        echo "nope";
    }
?>