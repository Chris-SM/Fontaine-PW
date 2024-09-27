<?php
//Recebendo os dados do formulario
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $dt_nascimento = $_POST['dt_nascimento'];
    $cargo = $_POST['cargo'];
    $salario = $_POST['salario'];
    $dt_admissao = $_POST['dt_admissao'];
    $senha = $_POST['senha'];
    //trazendo o script da conexão que está no arquivo conexao.php include 'conexao.php';
    $insert_funcionario = "INSERT INTO funcionario
    VALUES (NULL, '$nome', '$sobrenome', '$dt_nascimento', '$cargo', '$salario', '$dt_admissao', '$senha')";
    $resultado = $conexao->query($insert_funcionario);
    if ($resultado) 
    {
        echo "<script>alert('Inserido com sucesso'); history.back() </script>";
    }
?>