<div class="text-center" style="margin-bottom: 50px">
	<h1><?= $match->journee->nomJournée ?> de <?= $match->journee->competition->nomCompetition ?></h1>
</div>

<div class="row text-center">
	<?php //debug($match);
	echo '<div class="col-md-2 col-md-offset-3">';
	echo $this->Html->image('equipes/'.$match->Domicile->nomImgLogo.'', array('alt' => 'logo equipe domicile', 'style' => 'display: inline'));
	echo '</div><div class="col-md-2" style="padding-top:50px">';
	echo '<h1 style="display: inline">VS</h1>';
	echo '</div><div class="col-md-2">';
	echo $this->Html->image('equipes/'.$match->Visiteur->nomImgLogo.'', array('alt' => 'logo equipe domicile', 'style' => 'display: inline')); ?>
	</div>
</div>
<div class="row text-center">
	<div class="col-md-2 col-md-offset-3">
		<?php echo $this->Html->link('<h2>'.$match->Domicile->nomEquipe.'</h2>', ['controller' => 'Equipes', 'action' => 'detailequipe', $match->Domicile->id], ['escape' => false, 'style' => 'text-decoration: none']); ?>
	</div>
	<div class="col-md-2 col-md-offset-2">
		<?php echo $this->Html->link('<h2>'.$match->Visiteur->nomEquipe.'</h2>', ['controller' => 'Equipes', 'action' => 'detailequipe', $match->Visiteur->id], ['escape' => false, 'style' => 'text-decoration: none']); ?>
	</div>
</div>
<div class="row text-center">
	<div class="col-md-2 col-md-offset-3">
		<?php echo '<h2 style="'.(($match->scoreEquipeDomicile<$match->scoreEquipeVisiteur)?'color: grey':'').'">'.$match->scoreEquipeDomicile.'</h2>' ?>
	</div>
	<div class="col-md-2 col-md-offset-2">
		<?php echo '<h2 style="'.(($match->scoreEquipeDomicile>$match->scoreEquipeVisiteur)?'color: grey':'').'">'.$match->scoreEquipeVisiteur.'</h2>' ?>
	</div>
</div>