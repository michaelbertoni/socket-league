<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MatchsFixture
 *
 */
class MatchsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'scoreEquipeDomicile' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'scoreEquipeVisiteur' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'EquipeDomicile_idEquipe' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'EquipeVisiteur_idEquipe' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Journée_idJournée' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'dateMatch' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_Match_Equipe1_idx' => ['type' => 'index', 'columns' => ['EquipeDomicile_idEquipe'], 'length' => []],
            'fk_Match_Equipe2_idx' => ['type' => 'index', 'columns' => ['EquipeVisiteur_idEquipe'], 'length' => []],
            'fk_Match_Journée1_idx' => ['type' => 'index', 'columns' => ['Journée_idJournée'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_Match_Equipe1' => ['type' => 'foreign', 'columns' => ['EquipeDomicile_idEquipe'], 'references' => ['equipes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Match_Equipe2' => ['type' => 'foreign', 'columns' => ['EquipeVisiteur_idEquipe'], 'references' => ['equipes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Match_Journée1' => ['type' => 'foreign', 'columns' => ['Journée_idJournée'], 'references' => ['journees', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'scoreEquipeDomicile' => 1,
            'scoreEquipeVisiteur' => 1,
            'EquipeDomicile_idEquipe' => 1,
            'EquipeVisiteur_idEquipe' => 1,
            'Journée_idJournée' => 1,
            'dateMatch' => '2016-04-12'
        ],
    ];
}
