<div class="row">
    <div class="col-sm-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $competition->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $competition->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Competitions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Equipes'), ['controller' => 'Equipes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipe'), ['controller' => 'Equipes', 'action' => 'add']) ?></li>
    </ul>
    </div>
    <div class="col-md-10">
        <?= $this->Form->create($competition) ?>
            <fieldset>
                <legend><?= __('Edit Competition') ?></legend>
                <?php
                    echo $this->Form->input('nomCompetition', array('class' => 'form-control'));
                    echo $this->Form->input('zoneCompetition', array('class' => 'form-control'));
                    echo $this->Form->input('nbEquipeCompetition', array('class' => 'form-control'));
                    echo $this->Form->input('ptsGagneCompetition', array('class' => 'form-control'));
                    echo $this->Form->input('ptsPerduCompetition', array('class' => 'form-control'));
                    echo $this->Form->input('ptsNulCompetition', array('class' => 'form-control'));
                    echo $this->Form->input('typeClsmtExAequoCompetition', array('class' => 'form-control'));
                    foreach ($equipes as $eq):
                    $equipeListe[$eq->id] = $eq->nomEquipe;
                    endforeach;
                    echo $this->Form->input('equipes._ids', ['options' => $equipeListe, 'class' => 'form-control']);
                ?>
            </fieldset>
                <div style="padding-top:10px;">
                    <?= $this->Form->button(__('Valider'), array('class' => 'btn btn-success')) ?>
                </div>
        <?= $this->Form->end() ?>
    </div>
</div>
