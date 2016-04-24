<div class="col-sm-4 sidebar">
<h2>Derniers matchs</h2>
<?php foreach ($matchs as $match): ?>
    <?php //debug($match);?>
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?= $match->dateMatch->nice('Europe/Paris', 'fr-FR'); ?> - <?= $match->journee->competition->nomCompetition ?>
                    </div>
                    <?php echo $this->Html->link(
                        '<div class="panel-body h4" style="padding-left: 20px; padding-right: 40px; color: black">
                            <p>'.
                                $this->Html->image('equipes/'.$match->Domicile->nomImgLogo.'', array('alt' => 'logo equipe domicile', 'style' => 'max-width: 40px; max-height:40px;')) . '
                                 ' . __($match->Domicile->nomCourt.'<span class="pull-right" style="font-family: verdana;'.(($match->scoreEquipeDomicile<$match->scoreEquipeVisiteur)?'color: grey':'').'">'.$match->scoreEquipeDomicile.'</span></p><p>') .
                                $this->Html->image('equipes/'.$match->Visiteur->nomImgLogo.'', array('alt' => 'logo equipe visiteur', 'style' => 'max-width: 40px; max-height:40px;')) . '
                                 ' . __($match->Visiteur->nomCourt.'<span class="pull-right" style="font-family: verdana;'.(($match->scoreEquipeDomicile>$match->scoreEquipeVisiteur)?'color: grey':'').'">'.$match->scoreEquipeVisiteur.'</span>')
                            .'</p>
                        </div>',
                        array ('controller' => 'Matchs',
                                'action' => 'frontView', $match->id),
                        array ('escape' => false,
                                'style' => 'text-decoration: none'));
                    ?>
                </div>
            </div>
<?php endforeach; ?>
</div>
<div class="col-sm-8 main">


    <div class="related">
        <h3><a  href="http://www.francefootball.fr/news/Ligue-1-tous-les-resumes-de-la-35e-journee-de-ligue-1/655335" style="color : black">Ligue 1 : tous les résumés de la 35e journée de Ligue 1</a></h3>
            <?php echo 
                $this->Html->image('articles/article1.jpg', array('style' => 'width : 75%'));  ?>  
    </div>
    <div class="related" style="padding-top : 7%">
        <h3><a  href="http://www.francefootball.fr/news/Ligue-1-premier-league-troyes-aston-villa-qui-est-le-plus-faible/654867" style="color : black">Ligue 1, Premier League : Troyes-Aston Villa, qui est le plus faible ?</a></h3>
            <?php echo 
                $this->Html->image('articles/article2.jpg', array('style' => 'width : 75%'));  ?>  
    </div>
    <div class="related" style="padding-top : 7%">
        <h3><a  href="http://www.francefootball.fr/news/Les-footeux-soutiennent-maitre-gims/655264" style="color : black">Les footeux soutiennent Maître Gims</a></h3>
            <?php echo 
                $this->Html->image('articles/article3.jpg', array('style' => 'width : 75%'));  ?>  
    </div>
    <div class="related" style="padding-top : 7%">
        <h3><a  href="http://www.francefootball.fr/news/Eden-hazard-chelsea-a-enfin-marque-deuxieme-quadruple-de-suite-pour-luis-suarez-fc-barcelone/655095" style="color : black">Eden Hazard (Chelsea) a enfin marqué, deuxième quadruplé de suite pour Luis Suarez (FC Barcelone)</a></h3>
            <?php echo 
                $this->Html->image('articles/article4.jpg', array('style' => 'width : 75%'));  ?>  
    </div>
    <div class="related" style="padding-top : 7%">
        <h3><?= __('Acheter vos places pour les prochains matchs') ?></h3>
              <a class="navbar-brand" href="http://www.fnacspectacles.com/place-spectacle/Sport/Football-p304283400729002095.htm">Ici !</a>
    </div>
</div>