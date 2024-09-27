<?php
    $conexao = new mysqli('localhost','root','root','cadastros');
    
//Recebendo os dados do formulario
    $nome = $_POST['nome'];
    $nm_sobrenome = $_POST['sobrenome'];
    $dt_nascimento = $_POST['dataNasc'];
    $nm_email = $_POST['email'];
    $nr_telefone = $_POST['telefone'];
    $nm_endereco = $_POST['nm_enderoco'];
    $nr_endereco = $_POST['Numero'];
    $cd_registro = $_POST['IDC'];
    //trazendo o script da conexão que está no arquivo conexao.php include 'conexao.php';
    $insert_funcionario = "INSERT INTO cliente
    VALUES ('$cd_registro','$nome','$nm_sobrenome','$nm_email'','$nr_telefone','$nm_endereco','$nr_endereco')";
    $resultado = $conexao->query($insert_funcionario);
    if ($resultado) 
    {
        echo "<script>alert('Inserido com sucesso'); history.back() </script>";
    }
?>