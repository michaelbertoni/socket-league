<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Journee'), ['action' => 'edit', $journee->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Journee'), ['action' => 'delete', $journee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $journee->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Journees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Journee'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Matchs'), ['controller' => 'Matchs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match'), ['controller' => 'Match', 'action' => 'add']) ?> </li>
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
    <div class="related">
    <h4><?= __('Related Matchs') ?></h4>
            <?php if (!empty($journee->matchs)): ?>
                <?php foreach ($journee->matchs as $matchs): ?>
                    <div class="col-md-4">
                        <span><?= h($matchs->dateMatch) ?></span>
                        <span><?= h($matchs->EquipeDomicile_idEquipe) ?></span>
                        <span><?= h($matchs->scoreEquipeDomicile) ?></span>
                        <span><?= h($matchs->EquipeVisiteur_idEquipe) ?></span>
                        <span><?= h($matchs->scoreEquipeVisiteur) ?></span>
                    </div>
                <?php endforeach; ?>


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
        <?php endif; ?>
    </div>
</div>
