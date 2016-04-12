<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Competition Entity.
 *
 * @property int $id
 * @property string $nomCompetition
 * @property string $zoneCompetition
 * @property string $nbEquipeCompetition
 * @property int $ptsGagneCompetition
 * @property int $ptsPerduCompetition
 * @property int $ptsNulCompetition
 * @property string $typeClsmtExAequoCompetition
 * @property \App\Model\Entity\Equipe[] $equipes
 */
class Competition extends Entity
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
