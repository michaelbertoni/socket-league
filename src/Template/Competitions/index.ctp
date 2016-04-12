<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Competition'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipes'), ['controller' => 'Equipes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipe'), ['controller' => 'Equipes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="competitions index large-9 medium-8 columns content">
    <h3><?= __('Competitions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nomCompetition') ?></th>
                <th><?= $this->Paginator->sort('zoneCompetition') ?></th>
                <th><?= $this->Paginator->sort('nbEquipeCompetition') ?></th>
                <th><?= $this->Paginator->sort('ptsGagneCompetition') ?></th>
                <th><?= $this->Paginator->sort('ptsPerduCompetition') ?></th>
                <th><?= $this->Paginator->sort('ptsNulCompetition') ?></th>
                <th><?= $this->Paginator->sort('typeClsmtExAequoCompetition') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($competitions as $competition): ?>
            <tr>
                <td><?= $this->Number->format($competition->id) ?></td>
                <td><?= h($competition->nomCompetition) ?></td>
                <td><?= h($competition->zoneCompetition) ?></td>
                <td><?= h($competition->nbEquipeCompetition) ?></td>
                <td><?= $this->Number->format($competition->ptsGagneCompetition) ?></td>
                <td><?= $this->Number->format($competition->ptsPerduCompetition) ?></td>
                <td><?= $this->Number->format($competition->ptsNulCompetition) ?></td>
                <td><?= h($competition->typeClsmtExAequoCompetition) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $competition->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $competition->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $competition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $competition->id)]) ?>
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
