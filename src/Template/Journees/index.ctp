<div class="row">
    <div class="col-sm-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('New Journee'), ['action' => 'add']) ?></li>
        </ul>
    </div>
    <div class="col-sm-10 main">
        <h3><?= __('Journees') ?></h3>
        <table class="table" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nomJournée') ?></th>
                    <th><?= $this->Paginator->sort('Competition_idCompetition') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($journees as $journee): ?>
                <tr>
                    <td><?= $this->Number->format($journee->id) ?></td>
                    <td><?= h($journee->nomJournée) ?></td>
                    <td><?= $this->Number->format($journee->Competition_idCompetition) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $journee->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $journee->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $journee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $journee->id)]) ?>
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
</div>