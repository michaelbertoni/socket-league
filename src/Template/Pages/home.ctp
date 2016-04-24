<div class="col-sm-2 sidebar">
    <li class="heading" style="list-style-type: none"><?= __('Derniers matchs') ?></li>
    <div class="related">
        <table class="table table-hover" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Score Equipe Domicile') ?></th>
                    <th><?= __('Score Equipe Visiteur') ?></th>
                    <th><?= __('Date Match') ?></th>
                    <th><?= __('Journée') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($matchs as $match): ?>
                <tr>
                    <td><?= h($match->id) ?></td>
                    <td><?= h($match->scoreEquipeDomicile) ?></td>
                    <td><?= h($match->scoreEquipeVisiteur) ?></td>
                    <td><?= h($match->dateMatch) ?></td>
                    <td><?= h($match->Journée_idJournée) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>    
    </div>
</div>
<div class="col-sm-8 col-sm-offset-2 main">

    <div class="related" style="padding-top : 7%">
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
              <a class="navbar-brand" href="http://www.fnacspectacles.com/place-spectacle/Sport/Football-p304283400729002095.htm">ici</a>
    </div>
</div>