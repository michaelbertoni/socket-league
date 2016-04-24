<div class="col-sm-8 main col-sm-offset-2">
    <h4><?= __('Derniers matchs') ?></h4>
    <div class="related">
        <table class="table table-hover" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('ScoreEquipeDomicile') ?></th>
                    <th><?= __('ScoreEquipeVisiteur') ?></th>
                    <th><?= __('DateMatch') ?></th>
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


    <div class="related" style="padding-top : 10%">
    <h4><?= __('Acheter vos places pour les prochains matchs') ?></h4>

          <a class="navbar-brand" href="http://www.fnacspectacles.com/place-spectacle/Sport/Football-p304283400729002095.htm">ici</a>
    </div>
</div>