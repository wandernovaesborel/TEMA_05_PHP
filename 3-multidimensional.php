<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Arrays Associativos - Múltiplas Pessoas</title>
    <style>
        /* Estilos CSS para a página */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Exemplo de Arrays Associativos em PHP - Múltiplas Pessoas</h2>
        <?php
        // Array multidimensional com informações de múltiplas pessoas
        $pessoas = array(
            array(
                "Nome" => "João",
                "Idade" => 25,
                "Cidade" => "São Paulo",
                "Profissão" => "Dentista",
                "Escolaridade" => "Mestrado"
            ),
            array(
                "Nome" => "Maria",
                "Idade" => 30,
                "Cidade" => "Rio de Janeiro",
                "Profissão" => "Personal",
                "Escolaridade" => "Curso superior completo"
            ),
            array(
                "Nome" => "Pedro",
                "Idade" => 28,
                "Cidade" => "Belo Horizonte",
                "Profissão" => "Paleontólogo",
                "Escolaridade" => "Doutorado"
            )
        );
        ?>

        <?php foreach ($pessoas as $pessoa): ?>
            <h3>Detalhes da Pessoa</h3>
            <ul>
                <?php foreach ($pessoa as $chave => $valor): ?>
                    <li><strong><?php echo $chave ?>:</strong> <?php echo $valor ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>
    </div>
</body>

</html>