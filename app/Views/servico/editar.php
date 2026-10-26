<?= $this->extend('layout/main') ?>

<?= $this->section('conteudo') ?>
<div class="form-container">
    <h1>Editar Serviço #<?= esc($servico['Id']) ?></h1>

    <?php if (!empty($erros)): ?>
        <div class="alert-error">
            <p>Verifique os campos:</p>
            <ul>
                <?php foreach ($erros as $erro): ?>
                    <li><?= esc($erro) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?= site_url('servicos/atualizar/'.$servico['Id']) ?>" method="post">
        <?= csrf_field() ?>
        
        <div class="form-group">
            <label for="Titulo">Título</label>
            <input type="text" id="Titulo" name="Titulo" maxlength="255" value="<?= esc($servico['Titulo'] ?? '') ?>" required>
        </div>

        <div class="form-group">
            <label for="Texto">Texto / Descrição</label>
            <textarea id="Texto" name="Texto" rows="8" required><?= esc($servico['Texto'] ?? '') ?></textarea>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-salvar">Salvar Alterações</button>
            <a href="<?= site_url('servicos') ?>" class="btn-cancelar">Cancelar</a>
        </div>
    </form>
</div>
<?= $this->endSection() ?>