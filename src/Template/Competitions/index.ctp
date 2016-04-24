<div class="row">
    <div class="col-sm-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('New Competition'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('List Equipes'), ['controller' => 'Equipes', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New Equipe'), ['controller' => 'Equipes', 'action' => 'add']) ?></li>
        </ul>
    </div>
    <div class="col-sm-10 main">
        <h3><?= __('Competitions') ?></h3>
        <table class="table table-hover" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nom') ?></th>
                    <th><?= $this->Paginator->sort('zone') ?></th>
                    <th><?= $this->Paginator->sort('nbEquipe') ?></th>
                    <th><?= $this->Paginator->sort('ptsGagne') ?></th>
                    <th><?= $this->Paginator->sort('ptsPerdu') ?></th>
                    <th><?= $this->Paginator->sort('ptsNul') ?></th>
                    <th><?= $this->Paginator->sort('typeClsmtExAequo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($competitions as $competition): ?>
                <tr>
                    <td><?= $this->Number->format($competition->id) ?></td>
                    <td><?= $this->Html->link(__(h($competition->nomCompetition)), ['action' => 'view', $competition->id]) ?></td>
                    <td><?= h($competition->zoneCompetition) ?></td>
                    <td><?= h($competition->nbEquipeCompetition) ?></td>
                    <td><?= $this->Number->format($competition->ptsGagneCompetition) ?></td>
                    <td><?= $this->Number->format($competition->ptsPerduCompetition) ?></td>
                    <td><?= $this->Number->format($competition->ptsNulCompetition) ?></td>
                    <td><?= h($competition->typeClsmtExAequoCompetition) ?></td>
                    <td class="actions">
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
        </div>
    </div>
</div>
