<?= $this->extend('layout/main') ?>

<?= $this->section('conteudo') ?>
<div class="card-header-title">
    <h1>Serviços e Comércios de Viçosa</h1>
    <p>Lista oficial de registros cadastrados para a Sprint 5.</p>
</div>

<?php if ($mensagem = session()->getFlashdata('mensagem')): ?>
    <div class="alert-success"><?= esc($mensagem) ?></div>
<?php endif; ?>

<?php if (empty($servicos)): ?>
    <p class="empty-msg">Nenhum serviço cadastrado.</p>
<?php else: ?>
    <div class="table-responsive">
        <table class="styled-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Texto / Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($servicos as $item): ?>
                <tr>
                    <td>#<?= esc($item['Id']) ?></td>
                    <td><strong><?= esc($item['Titulo']) ?></strong></td>
                    <td><?= nl2br(esc($item['Texto'] ?? '')) ?></td>
                    <td>
                        <a href="<?= site_url('servicos/editar/'. $item['Id']) ?>" class="btn-editar">Editar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>
<?= $this->endSection() ?>