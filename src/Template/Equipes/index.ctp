<div class="row">
    <div class="col-sm-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('New Equipe'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('List Competitions'), ['controller' => 'Competitions', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New Competition'), ['controller' => 'Competitions', 'action' => 'add']) ?></li>
        </ul>
    </div>
    <div class="col-sm-10 main">
        <h3><?= __('Equipes') ?></h3>
        <table class="table table-hover" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nomEquipe') ?></th>
                    <th><?= $this->Paginator->sort('nomCourt') ?></th>
                    <th><?= $this->Paginator->sort('presidentEquipe') ?></th>
                    <th><?= $this->Paginator->sort('dateFondationEquipe') ?></th>
                    <th><?= $this->Paginator->sort('entraineurEquipe') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($equipes as $equipe): ?>
                <tr>
                    <td><?= $this->Number->format($equipe->id) ?></td>
                    <td><?= h($equipe->nomEquipe) ?></td>
                    <td><?= h($equipe->nomCourt) ?></td>
                    <td><?= h($equipe->presidentEquipe) ?></td>
                    <td><?= $this->Number->format($equipe->dateFondationEquipe) ?></td>
                    <td><?= h($equipe->entraineurEquipe) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $equipe->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $equipe->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $equipe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipe->id)]) ?>
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