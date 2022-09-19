<?php
    switch ($_REQUEST["acao"]){
        case "cadastrar":
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha =
             md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('$nome', '$email', '$senha', '$data_nasc')";
            $res = $conn -> query($sql);

/* Condição que verifica se o cadastro foi bem sucedida e se foi irá imprimir uma mensagem e redirecionar para a página da lista. Se não obtiver sucesso, imprimirá uma mensagem e redirecionará para o página da lista. */
            if($res == true){
                print "<script>alert('Cadastro realizado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Erro ao cadastrar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;
        case "editar":
                
            break; 
        case "excluir":

            break;
    }

?>
<!-- obs -->
<!-- md5 é uma função que criptografa a senha no banco de dados. -->