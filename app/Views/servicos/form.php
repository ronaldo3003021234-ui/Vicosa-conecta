<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Viçosa Conecta - Formulário de Serviço</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 600px;">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3 class="mb-4"><?= isset($servico) ? 'Editar Serviço' : 'Novo Serviço'; ?></h3>
                
                <form action="<?= base_url('servicos/salvar'); ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    
                    <!-- Campo oculto para identificar se é edição ou criação -->
                    <input type="hidden" name="Id" value="<?= isset($servico) ? $servico['Id'] : ''; ?>">

                    <div class="mb-3">
                        <label for="Titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" name="Titulo" value="<?= isset($servico) ? esc($servico['Titulo']) : ''; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="categoria" class="form-label">Categoria</label>
                        <input type="text" class="form-control" name="categoria" value="<?= isset($servico) ? esc($servico['categoria']) : ''; ?>" required placeholder="Ex: Iluminação, Infraestrutura">
                    </div>

                    <div class="mb-3">
                        <label for="Texto" class="form-label">Descrição Detalhada</label>
                        <textarea class="form-control" name="Texto" rows="4" required><?= isset($servico) ? esc($servico['Texto']) : ''; ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="foto" class="form-label">Anexar Foto (Opcional)</label>
                        <input type="file" class="form-control" name="foto">
                        
                        <?php if (isset($servico) && !empty($servico['foto'])): ?>
                            <div class="mt-2">
                                <small class="text-muted">Foto atual:</small><br>
                                <img src="<?= base_url('uploads/' . esc($servico['foto'])); ?>" alt="Foto atual" width="100" class="img-thumbnail mt-1">
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" name="status">
                            <option value="Aberta" <?= (isset($servico) && $servico['status'] == 'Aberta') ? 'selected' : ''; ?>>Aberta</option>
                            <option value="Em Andamento" <?= (isset($servico) && $servico['status'] == 'Em Andamento') ? 'selected' : ''; ?>>Em Andamento</option>
                            <option value="Resolvida" <?= (isset($servico) && $servico['status'] == 'Resolvida') ? 'selected' : ''; ?>>Resolvida</option>
                        </select>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="<?= base_url('servicos'); ?>" class="btn btn-secondary">Voltar</a>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>