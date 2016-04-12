<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Match'), ['action' => 'edit', $match->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Match'), ['action' => 'delete', $match->id], ['confirm' => __('Are you sure you want to delete # {0}?', $match->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Matchs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="matchs view large-9 medium-8 columns content">
    <h3><?= h($match->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($match->id) ?></td>
        </tr>
        <tr>
            <th><?= __('ScoreEquipeDomicile') ?></th>
            <td><?= $this->Number->format($match->scoreEquipeDomicile) ?></td>
        </tr>
        <tr>
            <th><?= __('ScoreEquipeVisiteur') ?></th>
            <td><?= $this->Number->format($match->scoreEquipeVisiteur) ?></td>
        </tr>
        <tr>
            <th><?= __('EquipeDomicile IdEquipe') ?></th>
            <td><?= $this->Number->format($match->EquipeDomicile_idEquipe) ?></td>
        </tr>
        <tr>
            <th><?= __('EquipeVisiteur IdEquipe') ?></th>
            <td><?= $this->Number->format($match->EquipeVisiteur_idEquipe) ?></td>
        </tr>
        <tr>
            <th><?= __('Journée IdJournée') ?></th>
            <td><?= $this->Number->format($match->Journée_idJournée) ?></td>
        </tr>
        <tr>
            <th><?= __('DateMatch') ?></th>
            <td><?= h($match->dateMatch) ?></td>
        </tr>
    </table>
</div>
