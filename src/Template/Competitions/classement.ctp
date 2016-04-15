<?php
// debug($competition);
echo '
<div class="container-fluid">
    <div class="col-xs-4" style="padding-bottom: 20px">
        <h1>'.$competition['nomCompetition'].'</h1>
        <h2>Classement<h2>
    </div>
    
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Rang</th>
        <th>Equipe</th>
        <th>Pts</th>
        <th>J.</th>
        <th>G.</th>
        <th>P.</th>
        <th>p.</th>
        <th>c.</th>
        <th>Diff.</th>
      </tr>
    </thead>
    <tbody>';
    $rang = 0;
      foreach ($competition->equipes as $equipe)
      {
          $rang++;
          echo '<tr>
                    <td>'.$rang.'</td>
                    <td>'.$equipe['nomEquipe'].'</td>
                    <td>'.$equipe->pointsCompetition.'</td>
                    <td>'.$equipe->matchsJoues.'</td>
                    <td>'.$equipe->matchsGagnes.'</td>
                    <td>'.$equipe->matchsPerdus.'</td>
                    <td>'.$equipe->butsPour.'</td>
                    <td>'.$equipe->butsContre.'</td>
                    <td>'.$equipe->differenceBut.'</td>
                </tr>';
      }

echo '
    </tbody>
  </table>
    
</div>';
               
