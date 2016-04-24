<div class="row">
    <div class="col-sm-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Competition'), ['action' => 'edit', $competition->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Competition'), ['action' => 'delete', $competition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $competition->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Competitions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competition'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Equipes'), ['controller' => 'Equipes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipe'), ['controller' => 'Equipes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Journees'), ['controller' => 'Journees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Journee'), ['controller' => 'Journees', 'action' => 'add']) ?> </li>
    </ul>
    </div>
    <div class="col-md-10 main">

            <h2><?= __('Competition :') ?> <?= h($competition->nomCompetition) ?></h2>


            <h4><?= __('Journées de la compétitions :') ?></h4>
                        <?php if (!empty($competition->journees)): ?>
                        <table class="table table-hover" cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <?php foreach ($competition->journees as $journees): ?>
                                        <td><?= $this->Html->link(__(h($journees->nomJournée)), ['controller' => 'Journees', 'action' => 'view', $journees->id]) ?></td>
                                    <?php endforeach; ?>
                                </tr>
                            </thead>
                        </table>
                        <?php endif; ?>

        <div class="related">
            <h4><?= __('Equipes participantes') ?></h4>
            <?php if (!empty($competition->equipes)): ?>
            <table class="table table-hover" cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th><?= __('Id') ?></th>
                        <th><?= __('Equipe') ?></th>
                        <th><?= __('PresidentEquipe') ?></th>
                        <th><?= __('DateFondationEquipe') ?></th>
                        <th><?= __('EntraineurEquipe') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($competition->equipes as $equipes): ?>
                    <tr>
                        <td><?= h($equipes->id) ?></td>
                        <td><?= $this->Html->link(__(h($equipes->nomCourt)), ['controller' => 'Equipes', 'action' => 'view', $equipes->id]) ?></td>
                        <td><?= h($equipes->presidentEquipe) ?></td>
                        <td><?= h($equipes->dateFondationEquipe) ?></td>
                        <td><?= h($equipes->entraineurEquipe) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php endif; ?>
        </div>
    </div>
</div>
