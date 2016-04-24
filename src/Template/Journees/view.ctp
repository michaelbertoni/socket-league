<div class="row">
    <div class="col-sm-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Journee'), ['action' => 'edit', $journee->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Journee'), ['action' => 'delete', $journee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $journee->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Journees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Journee'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Matchs'), ['controller' => 'Matchs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match'), ['controller' => 'Match', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="col-sm-10 main">
    <h3><?= h($journee->id) ?></h3>
    <table class="vertical-table">
        <div class="row">
            <div class="col-md-3">
              <label> <?= __('NomJournée') ?></label>
            </div>
            <div class="col-md-3">
                <?= h($journee->nomJournée) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
              <label> <?= __('Id') ?></label>
            </div>
            <div class="col-md-3">
                <?= $this->Number->format($journee->id) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
              <label> <?= __('Competition IdCompetition') ?></label>
            </div>
            <div class="col-md-3">
                <?= $this->Number->format($journee->Competition_idCompetition) ?>
            </div>
        </div>

    </table>
    <div class="related">

        <h4><?= __('Matchs de la journée') ?></h4>

            <table class="table table-hover" cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th><?= __('Equipe domicile') ?></th>
                        <th><?= __('Score domicile') ?></th>
                        <th><?= __('Equipe Visiteur') ?></th>
                        <th><?= __('Score visiteur') ?></th>
                        <th><?= __('Date match') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($journee->matchs as $matchs): ?>
                    <tr>
                        <td><?= h($matchs->EquipeDomicile_idEquipe) ?></td>
                        <td><?= h($matchs->scoreEquipeDomicile) ?></td>
                        <td><?= h($matchs->EquipeVisiteur_idEquipe) ?></td>
                        <td><?= h($matchs->scoreEquipeVisiteur) ?></td>
                        <td><?= h($matchs->dateMatch) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Matchs', 'action' => 'view', $matchs->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Matchs', 'action' => 'edit', $matchs->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Matchs', 'action' => 'delete', $matchs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matchs->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
    </div>
</div>
