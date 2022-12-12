<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/style.css">
    <title>IMC Calculadora</title>
</head>
<body>
    <main>
        <?php
            $p = isset($_GET['peso'])?$_GET['peso']:1;
            $a = isset($_GET['altura'])?$_GET['altura']:1;
            $imc = $p/($a*$a);
            printf("<h2>Seu IMC é %.1f</h2>", $imc);
            if($imc<18.5){
                print "<p><strong>Abaixo do peso</strong><br>Risco de comorbidade: <strong class='baixo'>Baixo</strong></p>";
            }elseif($imc>=18.5 && $imc<25){
                print "<p><strong>Peso normal</strong><br>Risco de comorbidade: <strong class='medio'>Médio</strong></p>";
            }elseif($imc>=25 && $imc<30){
                print "<p><strong>Sobrepeso</strong><br>Risco de comorbidade: <strong class='medio'>Aumentado</strong></p>";
            }elseif($imc>=30 && $imc<35){
                print "<p><strong>Obesidade I</strong><br>Risco de comorbidade: <strong class='moderado'>Moderado</strong></p>";
            }elseif($imc>=35 && $imc<40){
                print "<p><strong>Obesidade II</strong><br>Risco de comorbidade: <strong class='grave'>Grave</strong></p>";
            }else{
                print "<p><strong>Obesidade III</strong><br>Risco de comorbidade: <strong class='grave'>Muito grave</strong></p>";
            }
        ?>
        <p><a href="index.php" class="btn">Voltar</a></p>
    </main>
</body>
</html>