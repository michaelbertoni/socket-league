<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Match Entity.
 *
 * @property int $id
 * @property int $scoreEquipeDomicile
 * @property int $scoreEquipeVisiteur
 * @property int $EquipeDomicile_idEquipe
 * @property int $EquipeVisiteur_idEquipe
 * @property int $Journée_idJournée
 * @property \Cake\I18n\Time $dateMatch
 */
class Match extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
