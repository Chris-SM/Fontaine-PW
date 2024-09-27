<?php
$SenhaD = $_GET["senha"];
$ContaD = $_GET["email"];
$ContasC = [
    [
        "jose.barbosa111@etec.sp.gov.br",
        "12345678"
    ],
    [
        "cristovao.santos@etec.sp.gov.br",
        "csms2222"
    ],
    [
        "joao.guimaraes48@etec.sp.gov.br",
        "SalesLindo"
    ],
    [
        "joelma.ribeiro3@etec.sp.gov.br",
        "etecab107"
    ],
    [
        "test",
        "testando"
    ]
];
$i = 0;

foreach ($ContasC as $key) {
    if($key[0] == $ContaD)
    {
        if ($key[1] = $SenhaD) {
             echo "<script>window.location.replace('Menu.html');</script>";
        }
        else{
        echo "<script>window.location.replace('index.html');</script>";
        }
    }
}
echo "<script>window.location.replace('index.html');</script>";
?>