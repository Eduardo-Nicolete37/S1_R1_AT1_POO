<?php 
require_once "Produto.php";
$prod = null;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $prod = new Produto($_POST['name'], (float) $_POST['preco'], (float) $_POST['aval']
);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre novo cliente</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Cadastre um novo produto</h1>
    </header>
    <main>
        <form action="" method="post" class="post">
            <label for="name">Nome: </label>
            <input type="text" name="name" maxlength="255" placeholder="Mousepad" required> <br>
            <label for="preco">Preço: </label>
            <input type="number" name="preco" maxlength="5" placeholder="6.7 reais" step="0.01" required> <br>
            <label for="aval">Avaliações: </label>
            <input type="number" name="aval" maxlength="2" placeholder="10" step="0.01" required> <br>
            <input type="submit" value="Enviar">
        </form>
        <div class="answer">
        <?php 
        if ($prod) {
            echo "<hr>";
            $prod->cadastroFeito(); // Chamamos a função cadastroFeito() entregando os dados dentro da $prod
            echo "<hr>";
            $prod->mostrarProduto(); // Chamamos a função mostrarProduto() entregando os dados dentro da $prod
        }
        ?>
        </div>
    </main>
</body>
</html>