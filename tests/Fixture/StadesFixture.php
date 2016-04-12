<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StadesFixture
 *
 */
class StadesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nomStade' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'capaciteStade' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'adresseStade' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'telephoneStade' => ['type' => 'string', 'length' => 13, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Equipe_idEquipe' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Stade_Equipe_idx' => ['type' => 'index', 'columns' => ['Equipe_idEquipe'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_Stade_Equipe' => ['type' => 'foreign', 'columns' => ['Equipe_idEquipe'], 'references' => ['equipes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'nomStade' => 'Lorem ipsum dolor sit amet',
            'capaciteStade' => 1,
            'adresseStade' => 'Lorem ipsum dolor sit amet',
            'telephoneStade' => 'Lorem ipsum',
            'Equipe_idEquipe' => 1
        ],
    ];
}
