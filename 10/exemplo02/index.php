<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form>
        <label for="">Valor 1</label><br>
        <input type="number" name="valor1" placeholder="Informe o valor 1" required autofocus> <br>
        <label for="">Valor 2</label><br>
        <input type="number" name="valor2" placeholder="Informe o valor 2" required> <br>
        <input type="radio" name="operacao" value="somar" checked> Somar (+) 
        <input type="radio" name="operacao" value="subtrair"> Subtrair (-) 
        <br>
        <input type="submit" value="Executar" name="executar">
    </form>
    <hr>
    <h2>Resultado</h2>
    <?php include 'src/operacao.php';?>
</body>
</html>
