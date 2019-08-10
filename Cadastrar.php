<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrado &#x2015; IF Maker</title>
    <link rel="stylesheet" type="text/css" href="./css/reset.css"> <!-- reset adaptado -->
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link rel="stylesheet" type="text/css" href="./css/cadastrar.css">
    <link rel="shortcut icon" href="./favicon.ico">
</head>

<body>
    <header>
        <h1>IF Maker &#9881;</h1>
        <h2>Laboratório de fabricação <abbr title="Instituto Federal de Educação, Ciência e Tecnologia de Mato Grosso do Sul">IFMS</abbr> Aquidauana</h2>
    </header>

    <main>
        <p>Usuário cadastrado com êxito!</p>

        <details>
            <summary>Dados do usuário</summary>

            <?php
            $preenchido = isset($_POST["enviar"]);
            if (!$preenchido)
                header("Location: .");

            echo "<ul class='cadastro'>";

            foreach ($_POST as $key => &$value) {
                if ($key == "enviar" || $key == "senha")
                    continue;

                if ($key == "historico")
                    $value = str_replace("\n", "<br>", $value);

                if ($key == "dataNascimento" && strlen($value) != 0) {
                    $value = strtotime($value);
                    $value = date("d/m/Y", $value);
                }

                echo "<li><b>" . ucfirst($key) . ":</b> ";

                echo (strlen($value) == 0 ? "Não especificado(a)" : $value) . "</li>";
            }

            echo "</ul>";
            ?>
        </details>
    </main>

    <aside>
        <ul class="links">
            <li><a href="#">Nossos serviços</a></li>
            <li><a href="./../">Cadastro</a></li>
            <li><a href="#">Quem somos</a></li>
            <li><a href="http://ifms.edu.br/" target="_blank">Site do IFMS</a></li>
        </ul>
    </aside>

    <footer>
        <span role="autoria">&copy; Hiroshi & Matheuszinho 2019</span>
    </footer>
</body>

</html>