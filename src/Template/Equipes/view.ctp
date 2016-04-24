<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Equipe'), ['action' => 'edit', $equipe->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Equipe'), ['action' => 'delete', $equipe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipe->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Equipes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipe'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Competitions'), ['controller' => 'Competitions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competition'), ['controller' => 'Competitions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="equipes view large-9 medium-8 columns content">
    <h3><?= h($equipe->id) ?></h3>
    <table class="table table-hover">
        <thead>
            <tr>
                 <th><?= __('NomEquipe') ?></th>
                 <th><?= __('NomCourt') ?></th>
                 <th><?= __('PresidentEquipe') ?></th>
                 <th><?= __('EntraineurEquipe') ?></th>
                 <th><?= __('Id') ?></th>
                 <th><?= __('DateFondationEquipe') ?></th>
            </tr>
        </thead>
        <tbody>
             <tr>
                  <td><?= h($equipe->nomEquipe) ?></td>
                  <td><?= h($equipe->nomCourt) ?></td>
                  <td><?= h($equipe->presidentEquipe) ?></td>
                  <td><?= h($equipe->entraineurEquipe) ?></td>
                  <td><?= $this->Number->format($equipe->id) ?></td>
                  <td><?= $this->Number->format($equipe->dateFondationEquipe) ?></td>
             </tr>
        </tbody>
    </table>
    <div class="related">
        <h4><?= __('Related Competitions') ?></h4>
        <?php if (!empty($equipe->competitions)): ?>
        <table class="table table-hover" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('NomCompetition') ?></th>
                    <th><?= __('ZoneCompetition') ?></th>
                    <th><?= __('NbEquipeCompetition') ?></th>
                    <th><?= __('PtsGagneCompetition') ?></th>
                    <th><?= __('PtsPerduCompetition') ?></th>
                    <th><?= __('PtsNulCompetition') ?></th>
                    <th><?= __('TypeClsmtExAequoCompetition') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($equipe->competitions as $competitions): ?>
                <tr>
                    <td><?= h($competitions->id) ?></td>
                    <td><?= h($competitions->nomCompetition) ?></td>
                    <td><?= h($competitions->zoneCompetition) ?></td>
                    <td><?= h($competitions->nbEquipeCompetition) ?></td>
                    <td><?= h($competitions->ptsGagneCompetition) ?></td>
                    <td><?= h($competitions->ptsPerduCompetition) ?></td>
                    <td><?= h($competitions->ptsNulCompetition) ?></td>
                    <td><?= h($competitions->typeClsmtExAequoCompetition) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Competitions', 'action' => 'view', $competitions->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Competitions', 'action' => 'edit', $competitions->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Competitions', 'action' => 'delete', $competitions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $competitions->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
