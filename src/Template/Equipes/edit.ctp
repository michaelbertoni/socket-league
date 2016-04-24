<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $equipe->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $equipe->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Equipes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Competitions'), ['controller' => 'Competitions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competition'), ['controller' => 'Competitions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="equipes form large-9 medium-8 columns content">
    <?= $this->Form->create($equipe) ?>
    <fieldset>
        <legend><?= __('Edit Equipe') ?></legend>
        <?php
        echo'<div class="col-md-4">';
            echo $this->Form->input('nomEquipe', array('class' => 'form-control'));
            echo $this->Form->input('nomCourt', array('class' => 'form-control'));
            echo $this->Form->input('presidentEquipe', array('class' => 'form-control'));
            echo $this->Form->input('dateFondationEquipe', array('class' => 'form-control'));
            echo $this->Form->input('entraineurEquipe', array('class' => 'form-control'));
            echo '<label>caca</label>';
             echo  '<select multiple class="form-control" id="sel2">';
             foreach($competitions as $competition) {
                echo'<option value="'.$competition->id.'">'.$competition->nomCompetition.'</option>';
             }
             echo '</select>';
        echo'</div>';
        ?>
    </fieldset>
    <div class="col-md-offset-1" style="padding-top:15px;">
        <?= $this->Form->button(__('Valider'),array('class' => 'btn btn-success', 'style' => 'padding-top:10px')) ?>
    </div>
    <?= $this->Form->end() ?>
</div>




