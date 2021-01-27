<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;469;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="recursos/css/estilo.css">
        <link rel="stylesheet" href="recursos/css/exercicio.css">
        <title>Exercício</title>
    </head>
    <body class="exercicio">
        <header class="cabecalho">
            <h1>Curso PHP</h1>
            <h2>Visualização do Exercício</h2>
        </header>
        <mav class="navegacao">
            <a href="<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?>" class="verde">Sem formatação</a>
            <a href="index.php" class="vermelho">Voltar</a>
        </mav>
        <main class="principal">
            <div class="conteudo">
                <?php
                    include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
                ?>
            </div>
        </main>
        <footer class="rodape">
            COD3R & ALUNOS © <?= date('Y');?>
        </footer>
        
    </body>
</html>