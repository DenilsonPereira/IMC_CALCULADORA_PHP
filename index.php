<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <main>
        <form action="calc.php" method="get">
            <h1>Calculadora IMC</h1>
            <div class="num">
                <label for="pes">Peso:</label><br/>
                <input type="number" name="peso" id="pes" step="any" min="1" placeholder="85.5" required autofocus>
            </div>
            
            <div class="num">
                <label for="alt">Altura:</label><br/>
                <input type="number" name="altura" id="alt" step="any" min="1" max="3" placeholder="1.45" required>
            </div>

            <input type="submit" value="Calcular" class="btn calcular">
        </form>
    </main>
</body>
</html>