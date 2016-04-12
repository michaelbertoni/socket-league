<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Journee'), ['action' => 'edit', $journee->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Journee'), ['action' => 'delete', $journee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $journee->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Journees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Journee'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="journees view large-9 medium-8 columns content">
    <h3><?= h($journee->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('NomJournée') ?></th>
            <td><?= h($journee->nomJournée) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($journee->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Competition IdCompetition') ?></th>
            <td><?= $this->Number->format($journee->Competition_idCompetition) ?></td>
        </tr>
    </table>
</div>
