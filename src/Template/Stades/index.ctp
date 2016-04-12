<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Stade'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="stades index large-9 medium-8 columns content">
    <h3><?= __('Stades') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nomStade') ?></th>
                <th><?= $this->Paginator->sort('capaciteStade') ?></th>
                <th><?= $this->Paginator->sort('adresseStade') ?></th>
                <th><?= $this->Paginator->sort('telephoneStade') ?></th>
                <th><?= $this->Paginator->sort('Equipe_idEquipe') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stades as $stade): ?>
            <tr>
                <td><?= $this->Number->format($stade->id) ?></td>
                <td><?= h($stade->nomStade) ?></td>
                <td><?= $this->Number->format($stade->capaciteStade) ?></td>
                <td><?= h($stade->adresseStade) ?></td>
                <td><?= h($stade->telephoneStade) ?></td>
                <td><?= $this->Number->format($stade->Equipe_idEquipe) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $stade->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stade->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stade->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
