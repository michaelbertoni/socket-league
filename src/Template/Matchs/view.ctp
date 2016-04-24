<div class="row">
    <div class="col-sm-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Match'), ['action' => 'edit', $match->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Match'), ['action' => 'delete', $match->id], ['confirm' => __('Are you sure you want to delete # {0}?', $match->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Matchs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="col-sm-10 main">
    <h3>DETAILS</h3>

         <div class="row">
                <div class="col-md-3">
                  <label> <?= __('Id') ?></label>
                </div>
                <div class="col-md-3">
                    <?= $this->Number->format($match->id) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                  <label><?= __('ScoreEquipeDomicile') ?></label>
                </div>
                <div class="col-md-3">
                    <?= $this->Number->format($match->scoreEquipeDomicile) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                  <label><?= __('ScoreEquipeVisiteur') ?></label>
                </div>
                <div class="col-md-3">
                    <?= $this->Number->format($match->scoreEquipeVisiteur) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                  <label><?= __('EquipeDomicile IdEquipe') ?></label>
                </div>
                <div class="col-md-3">
                  <?= $this->Number->format($match->EquipeDomicile_idEquipe) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label><?= __('EquipeVisiteur IdEquipe') ?></label>
                </div>
                <div class="col-md-3">
                    <?= $this->Number->format($match->EquipeVisiteur_idEquipe) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                  <label><?= __('Journée IdJournée') ?></label>
                </div>
                <div class="col-md-3">
                  <?= $this->Number->format($match->Journée_idJournée) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                  <label><?= __('DateMatch') ?></label>
                </div>
                <div class="col-md-3">
                  <?= h($match->dateMatch) ?>
                </div>
            </div>
</div>
