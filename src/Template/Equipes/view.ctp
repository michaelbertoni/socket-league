<div class="row">
    <div class="col-sm-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Equipe'), ['action' => 'edit', $equipe->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Equipe'), ['action' => 'delete', $equipe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipe->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Equipes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipe'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Competitions'), ['controller' => 'Competitions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competition'), ['controller' => 'Competitions', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="col-sm-10 main">
    <h3>DETAILS</h3>

        <div class="row">
            <div class="col-md-3">
              <label> <?= __('NomEquipe') ?></label>
            </div>
            <div class="col-md-3">
                <?= h($equipe->nomEquipe) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
              <label><?= __('NomCourt') ?></label>
            </div>
            <div class="col-md-3">
                <?= h($equipe->nomCourt) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
              <label><?= __('PresidentEquipe') ?></label>
            </div>
            <div class="col-md-3">
                <?= h($equipe->presidentEquipe) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
              <label><?= __('EntraineurEquipe') ?></label>
            </div>
            <div class="col-md-3">
                <?= h($equipe->entraineurEquipe) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
              <label><?= __('Id') ?></label>
            </div>
            <div class="col-md-3">
                <?= $this->Number->format($equipe->id) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
              <label><?= __('DateFondationEquipe') ?></label>
            </div>
            <div class="col-md-3">
                <?= $this->Number->format($equipe->dateFondationEquipe) ?>
            </div>
        </div>

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
        <h4><?= __('Related Stades') ?></h4>
        <?php if (!empty($equipe->stade)): ?>
        <table class="table" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?= __('id') ?></th>
                    <th><?= __('nomStade') ?></th>
                    <th><?= __('capaciteStade') ?></th>
                    <th><?= __('adresseStade') ?></th>
                    <th><?= __('telephoneStade') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $this->Number->format($equipe->stade->id) ?></td>
                    <td><?= h($equipe->stade->nomStade) ?></td>
                    <td><?= $this->Number->format($equipe->stade->capaciteStade) ?></td>
                    <td><?= h($equipe->stade->adresseStade) ?></td>
                    <td><?= h($equipe->stade->telephoneStade) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Stades', 'action' => 'view', $equipe->stade->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Stades', 'action' => 'edit', $equipe->stade->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Stades', 'action' => 'delete', $equipe->stade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipe->stade->id)]) ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
