<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="application-name" content="IF Maker">
    <meta name="author" content="br.edu.ifms">
    <meta name="description" content="Página de cadastro do IF Maker">
    <meta name="generator" content="Visual Studio Code">
    <meta name="keywords" content="Laboratório, Prototipação, Arduíno">
    <link rel="stylesheet" type="text/css" href="./css/reset.css"> <!-- reset adaptado -->
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link rel="stylesheet" type="text/css" href="./css/cadastrar.css">
    <link rel="shortcut icon" href="./favicon.ico">
    <title>Cadastro concluído &#x2015; IF Maker</title>
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
            function indentacao($N) {
                for ($n = 0; $n < $N; ++$n)
                    echo "\t";
            }

            $preenchido = isset($_POST["enviar"]) && strlen($_POST["nome"]) != 0
                && strlen($_POST["email"]) != 0 && strlen($_POST["senha"]) != 0
                && strlen($_POST["termos"]) != 0;

            if (!$preenchido)
                header("Location: .");

            echo "<ul class=\"cadastro\">\n";

            $eventos = "";
            foreach ($_POST as $key => &$value) {
                if ($key == "senha" || $key == "enviar" || $key == "termos")
                    continue;

                if (substr($key, 0, 6) == "evento") {
                    $eventos .= $value . "; ";
                    continue;
                }

                if ($key == "historico")
                    $value = str_replace("\n", "<br>", $value);
                
                if ($key == "dataNascimento" && strlen($value) != 0) {
                    $value = strtotime($value);
                    $value = date("d/m/Y", $value);
                }

                $label = $key;
                switch ($label) {
                    case "dataNascimento":
                        $label = "Data de nascimento";
                        break;
                    case "cpf":
                        $label = "CPF";
                        break;
                    case "endereco":
                        $label = "Endereço";
                        break;
                    case "numero":
                        $label = "Número";
                        break;
                    case "cep":
                        $label = "CEP";
                        break;
                    case "historico":
                        $label = "Histórico";
                        break;
                    case "poc":
                        $label = "Cursos/Palestras/Oficinas";
                        break;
                }

                echo indentacao(4) . "<li><b>" . ucfirst($label) . ":</b> ";

                echo (strlen($value) == 0 ? "Não especificado(a)" : $value) . "</li>\n";
            }

            if (strlen($eventos) != "")
                echo indentacao(4) . "<li><b>Eventos:</b> " . $eventos . "</li>\n";

            echo indentacao(3) . "</ul>\n";
            ?>
        </details>
    </main>

    <aside>
        <ul class="links">
            <li><a href=".">Nossos serviços</a></li>
            <li><a href="./cadastrar.html">Cadastro</a></li>
            <li><a href="#">Quem somos</a></li>
            <li><a href="http://ifms.edu.br/" target="_blank">Site do IFMS</a></li>
        </ul>
    </aside>

    <footer>
        <span role="autoria">&copy; Hiroshi & Matheuszinho 2019</span>
    </footer>
</body>

</html>