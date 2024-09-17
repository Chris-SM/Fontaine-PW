<?php
$SenhaD = $_GET["senha"];
$ContaD = $_GET["email"];
// $ContasC = [
//     [
//         "jose.barbosa111@etec.sp.gov.br",
//         "12345678"
//     ],
//     [
//         "cristovao.santos@etec.sp.gov.br",
//         "csms2222"
//     ],
//     [
//         "joao.guimaraes48@etec.sp.gov.br",
//         "SalesLindo"
//     ],
//     [
//         "joelma.ribeiro3@etec.sp.gov.br",
//         "etecab107"
//     ],
//     [
//         "test",
//         "testando"
//     ]
// ];
$i = 0;


$conec = new mysqli('localhost','root','root','bd_fontaine');



$result = $conec->query('select nm_login,nm_senha,nm_cargo from tb_funcionario');

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row["nm_login"] == $ContaD)
    {
        if ($row["nm_senha"] == $SenhaD) {
            if($row["nm_cargo"] == "Adm")
            {
                echo "<script src='../js/scripter.js'>atcti();</script>";
            }
             echo "<script>window.location.replace('../Menu.html');</script>";
        }
        else{
        echo "<script>window.location.replace('../index.html');</script>";
        }
    }
}
}
echo "<script>window.location.replace('../index.html');</script>";
?>