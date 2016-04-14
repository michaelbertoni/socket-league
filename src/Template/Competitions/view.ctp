<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Competition'), ['action' => 'edit', $competition->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Competition'), ['action' => 'delete', $competition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $competition->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Competitions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competition'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Equipes'), ['controller' => 'Equipes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipe'), ['controller' => 'Equipes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="competitions view large-9 medium-8 columns content">
    <h3><?= h($competition->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('NomCompetition') ?></th>
            <td><?= h($competition->nomCompetition) ?></td>
        </tr>
        <tr>
            <th><?= __('ZoneCompetition') ?></th>
            <td><?= h($competition->zoneCompetition) ?></td>
        </tr>
        <tr>
            <th><?= __('NbEquipeCompetition') ?></th>
            <td><?= h($competition->nbEquipeCompetition) ?></td>
        </tr>
        <tr>
            <th><?= __('TypeClsmtExAequoCompetition') ?></th>
            <td><?= h($competition->typeClsmtExAequoCompetition) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($competition->id) ?></td>
        </tr>
        <tr>
            <th><?= __('PtsGagneCompetition') ?></th>
            <td><?= $this->Number->format($competition->ptsGagneCompetition) ?></td>
        </tr>
        <tr>
            <th><?= __('PtsPerduCompetition') ?></th>
            <td><?= $this->Number->format($competition->ptsPerduCompetition) ?></td>
        </tr>
        <tr>
            <th><?= __('PtsNulCompetition') ?></th>
            <td><?= $this->Number->format($competition->ptsNulCompetition) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Equipes') ?></h4>
        <?php if (!empty($competition->equipes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('NomEquipe') ?></th>
                <th><?= __('NomCourt') ?></th>
                <th><?= __('PresidentEquipe') ?></th>
                <th><?= __('DateFondationEquipe') ?></th>
                <th><?= __('EntraineurEquipe') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($competition->equipes as $equipes): ?>
            <tr>
                <td><?= h($equipes->id) ?></td>
                <td><?= h($equipes->nomEquipe) ?></td>
                <td><?= h($equipes->nomCourt) ?></td>
                <td><?= h($equipes->presidentEquipe) ?></td>
                <td><?= h($equipes->dateFondationEquipe) ?></td>
                <td><?= h($equipes->entraineurEquipe) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Equipes', 'action' => 'view', $equipes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Equipes', 'action' => 'edit', $equipes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Equipes', 'action' => 'delete', $equipes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
        <h4><?= __('Related Journes') ?></h4>
        <?php if (!empty($competition->journees)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('nomJournée') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($competition->journees as $journees): ?>
            <tr>
                <td><?= h($journees->id) ?></td>
                <td><?= h($journees->nomJournée) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Journees', 'action' => 'view', $journees->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Journees', 'action' => 'edit', $journees->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'journees', 'action' => 'delete', $journees->id], ['confirm' => __('Are you sure you want to delete # {0}?', $journees->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
