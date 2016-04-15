<?php
// debug($competition);
echo '
<div class="container-fluid">
    <div class="row-fluid">
        <div class="col-xs-4">
            <h1>'.$competition->nomCompetition.'</h1>
            <h2>Classement<h2>
        </div>
        <div class="col-xs-offset-4 col-xs-4" style="padding-bottom: 50px">
                    <img src="/img/competitions/'.$competition->nomImgLogo.'" alt="logo competition" class="img-responsive pull-right" style="max-height:200px">
        </div>
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
        <th>N.</th>
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
                    <td><img src="/img/equipes/'.$equipe->nomImgLogo.'" style="padding-right: 10px" alt="logo equipe"><a href="equipe/'.$equipe->id.'">'.$equipe->nomEquipe.'</a></td>
                    <td>'.$equipe->pointsCompetition.'</td>
                    <td>'.$equipe->matchsJoues.'</td>
                    <td>'.$equipe->matchsGagnes.'</td>
                    <td>'.$equipe->matchsPerdus.'</td>
                    <td>'.$equipe->matchsNuls.'</td>
                    <td>'.$equipe->butsPour.'</td>
                    <td>'.$equipe->butsContre.'</td>
                    <td>'.$equipe->differenceBut.'</td>
                </tr>';
      }

echo '
    </tbody>
  </table>
    
</div>';
               
