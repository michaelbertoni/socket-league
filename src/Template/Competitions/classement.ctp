<div class="row">
    <div class="col-xs-4">
        <h1><?= $competition->nomCompetition ?></h1>
        <h2>Classement<h2>
    </div>
    <div class="col-xs-offset-4 col-xs-4" style="padding-bottom: 50px">
        <?= $this->Html->image('competitions/'.$competition->nomImgLogo.'', array('alt' => 'logo compétition', 'class' => 'img-responsive pull-right', 'style' => "max-width: 150px")); ?>
    </div>
</div>


<table class="table table-striped">
    <thead>
      <tr>
        <th class="text-center">Rang</th>
        <th>Equipe</th>
        <th>Pts</th>
        <th>J.</th>
        <th>G.</th>
        <th>P.</th>
        <th>N.</th>
        <th>bp.</th>
        <th>bc.</th>
        <th>Diff.</th>
      </tr>
    </thead>
    <tbody>
    <?php $rang = 0;
      foreach ($competition->equipes as $equipe)
      {
          $rang++;
          echo '<tr>
                    <td class="h3 text-center">'.$rang.'</td>
                    <td>';
                    echo $this->Html->link(
                        $this->Html->image('equipes/'.$equipe->nomImgLogo.'', array('alt' => 'logo equipe', 'style' => 'padding-right: 10px; max-width: 40px; max-height:40px;')).
                        __($equipe->nomEquipe),
                        array ('controller' => 'Equipes','action' => 'detailequipe', $equipe->id),
                        array ('escape' => false,'style' => 'text-decoration: none; color: black'));
                    echo '</td>
                    <td>'.$equipe->pointsCompetition.'</td>
                    <td>'.$equipe->matchsJoues.'</td>
                    <td>'.$equipe->matchsGagnes.'</td>
                    <td>'.$equipe->matchsPerdus.'</td>
                    <td>'.$equipe->matchsNuls.'</td>
                    <td>'.$equipe->butsPour.'</td>
                    <td>'.$equipe->butsContre.'</td>
                    <td>'.(($equipe->differenceBut>0)?'+'.$equipe->differenceBut:$equipe->differenceBut).'</td>
                </tr>';
      } ?>
    </tbody>
</table>