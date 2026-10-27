<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Viçosa Conecta - Lista de Serviços</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>🌿 Viçosa Conecta - Serviços</h2>
            <a href="<?= base_url('servicos/novo'); ?>" class="btn btn-success">+ Novo Serviço</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-striped align-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Categoria</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($servicos)): ?>
                            <?php foreach ($servicos as $servico): ?>
                            <tr>
                                <td><?= $servico['Id']; ?></td>
                                <td><?= esc($servico['Titulo']); ?></td>
                                <td><span class="badge bg-secondary"><?= esc($servico['categoria']); ?></span></td>
                                <td>
                                    <?php 
                                        $badgeColor = 'bg-primary';
                                        if ($servico['status'] == 'Em Andamento') $badgeColor = 'bg-warning text-dark';
                                        if ($servico['status'] == 'Resolvida') $badgeColor = 'bg-success';
                                    ?>
                                    <span class="badge <?= $badgeColor; ?>"><?= esc($servico['status']); ?></span>
                                </td>
                                <td>
                                    <a href="<?= base_url('servicos/editar/' . $servico['Id']); ?>" class="btn btn-sm btn-primary">Editar</a>
                                    <a href="<?= base_url('servicos/excluir/' . $servico['Id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Deseja realmente excluir?')">Excluir</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="text-center text-muted">Nenhum serviço cadastrado.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>