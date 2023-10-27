<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/tela-principal.css">
    <title>Sistema escolar - cadastros de alunos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&family=Nunito:wght@300;400;500;700&family=Poppins:wght@300;400;500;700&family=Roboto:wght@300;400;500;700&family=Unbounded:wght@200;300;400;700&display=swap" rel="stylesheet">
    <script src="../scripts/script.js" defer></script>
</head>
<body>


    <header>
        <div class="nav-main">
            <div class="header-left">
                <!-- Script PHP para o tela inicial logado -->
                <?php
                require '../scripts/script-tela-logado.php';
                ?>
            </div>
            <nav class="mid-ancoras-main">
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Alunos</a></li>
                    <li><a href="#">Cadastros</a></li>
                </ul>
            </nav>

            <div class="header-right">
                <form action="">
                    <label for="buscar-aluno"></label>
                    <input type="text" placeholder="Buscar Aluno" name="buscar-aluno" id="buscar-aluno">
                    <button>Buscar</button>
                </form>
            </div>
        </div>
     </header>
    <main>

    </main>
    <footer>

    </footer>
</body>
</html>