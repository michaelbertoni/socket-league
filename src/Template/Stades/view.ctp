<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Stade'), ['action' => 'edit', $stade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Stade'), ['action' => 'delete', $stade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Stades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stade'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="stades view large-9 medium-8 columns content">
    <h3><?= h($stade->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('NomStade') ?></th>
            <td><?= h($stade->nomStade) ?></td>
        </tr>
        <tr>
            <th><?= __('AdresseStade') ?></th>
            <td><?= h($stade->adresseStade) ?></td>
        </tr>
        <tr>
            <th><?= __('TelephoneStade') ?></th>
            <td><?= h($stade->telephoneStade) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($stade->id) ?></td>
        </tr>
        <tr>
            <th><?= __('CapaciteStade') ?></th>
            <td><?= $this->Number->format($stade->capaciteStade) ?></td>
        </tr>
        <tr>
            <th><?= __('Equipe IdEquipe') ?></th>
            <td><?= $this->Number->format($stade->Equipe_idEquipe) ?></td>
        </tr>
    </table>
</div>
