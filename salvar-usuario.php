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
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha =
             md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];  

            /* Updating the database with the new information. */
            $sql = "UPDATE usuarios SET 
                        nome = '$nome', 
                        email = '$email', 
                        senha = '$senha', 
                        data_nasc = '$data_nasc' 
                    WHERE 
                        id = ".$_REQUEST['id'];

            $res = $conn -> query($sql);

            if($res == true){
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Erro ao editar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break; 
        case "excluir":
            $sql = "DELETE FROM usuarios WHERE id = ".$_REQUEST['id'];
            $res = $conn -> query($sql);

            if($res == true){
                print "<script>alert('Excluido com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Erro ao excluir');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
    }

?>
<!-- obs -->
<!-- md5 é uma função que criptografa a senha no banco de dados. -->