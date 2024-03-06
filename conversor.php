<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>conversor de moeda</h1>
        <?php 
        // Cotação copiada do Google
        $cotação = 5.17;

        // Quanto $$ voçê tem?
        $real = $_REQUEST["din"] ?? 0;

        // Equivalência em dólar
        $dolar = $real / $cotação;

        // Mostrar o resultado
        // Formatação de moedas com internacionalição!
        // Biblioteca intl (internallization php)

        $padrão = numfmt_create("pr_BR", NumberFormatter::CURRENCY);
            
        echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . "Equivalem a " .  numfmt_format_currency($padrão, $dolar, "USD") ."</p>";  
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>