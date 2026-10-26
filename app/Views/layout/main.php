<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viçosa Conecta</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/estilo.css') ?>">
</head>
<body>
    <header>
        <?= $this->include('layout/menu') ?>
    </header>
    <main class="container">
        <?= $this->renderSection('conteudo') ?>
    </main>
</body>
</html>