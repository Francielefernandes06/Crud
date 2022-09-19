<h1>Listar Usúarios</h1>
<?php
    $sql = "SELECT * FROM usuarios";

    $res = $conn -> query($sql);

    $qtd = $res -> num_rows;

    /* Condição de verifica se há usuários no banco de dados. Se houver, ele irá imprimi-los. Se lá
    não forem, ele imprimirá uma mensagem dizendo que não há usuários. */
    if($qtd > 0){
        while($row = $res -> fetch_object()){
            print "ID: $row->id <br>";
            print "Nome: $row->nome <br>";
            print "Email: $row->email <br>";
            print "Data de Nascimento: $row->data_nasc <br>";
            print "<hr>";
            print "<a class='btn btn-success' href='?page=editar&id=".$row->id."'>Editar</a>";
            print " | ";
            print "<a class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."'}else{false;}\">Excluir</a>";
            print "<hr>";
        }
    }else{
        print "<p class='alert aleert-danger'>Não há usuários cadastrados</p>";
    }
?>