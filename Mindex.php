
<script>
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
$a = 0;
foreach ($ContasC as $Login) {
    if ($Login[0] = $ContaD) {
        $ContaL = $Login[0];
        $a = $i;
    }
    $a++;
}
if ($ContasC[$i][1] = $SenhaD) {
    echo "window.location.replace('Menu.html');";
}
else{
    echo "window.location.replace('index.html');";
}
echo "oi";
echo $SenhaD;
?>
</script>