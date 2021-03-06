<div class="row">
    <div class="col-sm-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Stade'), ['action' => 'edit', $stade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Stade'), ['action' => 'delete', $stade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Stades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stade'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="col-sm-10 main">    <h3>DETAILS</h3>
    <div class="row">
        <div class="col-md-3">
          <label> <?= __('NoStade') ?></label>
        </div>
        <div class="col-md-3">
            <?= h($stade->nomStade) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
          <label><?= __('AdresseStade') ?></label>
        </div>
        <div class="col-md-3">
            <?= h($stade->adresseStade) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
          <label><?= __('TelephoneStade') ?></label>
        </div>
        <div class="col-md-3">
            <?= h($stade->telephoneStade) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
          <label><?= __('Id') ?></label>
        </div>
        <div class="col-md-3">
            <?= $this->Number->format($stade->id) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
          <label><?= __('CapaciteStade') ?></label>
        </div>
        <div class="col-md-3">
            <?= $this->Number->format($stade->capaciteStade) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
          <label><?= __('Equipe IdEquipe') ?></label>
        </div>
        <div class="col-md-3">
            <?= $this->Number->format($stade->Equipe_idEquipe) ?>
        </div>
    </div>
</div>
