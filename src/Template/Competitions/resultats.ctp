<!--/*var_dump($competition);
var_dump($journee);
var_dump($matchs);*/-->

<div class="container-fluid">
    <h1><?= h($competition->nomCompetition) ?></h1>
    <h2><?= h($journee->nomJournée) ?><h2>

<!--            <table cellpadding="0" cellspacing="0">
                <thead>
                <tr>
                    <th><?/*= $this->Paginator->sort('id') */?></th>
                    <th><?/*= $this->Paginator->sort('scoreEquipeDomicile') */?></th>
                    <th><?/*= $this->Paginator->sort('scoreEquipeVisiteur') */?></th>
                    <th><?/*= $this->Paginator->sort('EquipeDomicile_idEquipe') */?></th>
                    <th><?/*= $this->Paginator->sort('EquipeVisiteur_idEquipe') */?></th>
                    <th><?/*= $this->Paginator->sort('Journée_idJournée') */?></th>
                    <th><?/*= $this->Paginator->sort('dateMatch') */?></th>
                    <th class="actions"><?/*= __('Actions') */?></th>
                </tr>
                </thead>
                <tbody>
                <?php /*foreach ($matchs as $match): */?>
                    <tr>
                        <td><?/*= $this->Number->format($match->id) */?></td>
                        <td><?/*= $this->Number->format($match->scoreEquipeDomicile) */?></td>
                        <td><?/*= $this->Number->format($match->scoreEquipeVisiteur) */?></td>
                        <td><?/*= $this->Number->format($match->EquipeDomicile_idEquipe) */?></td>
                        <td><?/*= $this->Number->format($match->EquipeVisiteur_idEquipe) */?></td>
                        <td><?/*= $this->Number->format($match->Journée_idJournée) */?></td>
                        <td><?/*= h($match->dateMatch) */?></td>
                        <td class="actions">
                            <?/*= $this->Html->link(__('View'), ['action' => 'view', $match->id]) */?>
                            <?/*= $this->Html->link(__('Edit'), ['action' => 'edit', $match->id]) */?>
                            <?/*= $this->Form->postLink(__('Delete'), ['action' => 'delete', $match->id], ['confirm' => __('Are you sure you want to delete # {0}?', $match->id)]) */?>
                        </td>
                    </tr>
                <?php /*endforeach; */?>
                </tbody>
            </table>-->

            <div class="row">
                <?php foreach ($matchs as $match): ?>
                <div class="col-xs-6">
                    <div class="panel panel-default">
                        <div class="panel-heading"><?= $match['dateMatch'] ?></div>
                        <div class="panel-body">
                            <?= $match['equipeDomicile'] ?> : <?= $match['scoreDomicile'] ?><br>
                            <?= $match['equipeVisiteur'] ?> : <?= $match['scoreVisiteur'] ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
</div>