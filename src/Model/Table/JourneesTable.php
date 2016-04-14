<?php
namespace App\Model\Table;

use App\Model\Entity\Journee;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Journees Model
 *
 */
class JourneesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('journees');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Competitions', [
            'foreignKey' => 'Competition_idCompetition',
        ]);

        $this->hasMany('Matchs', [
            'foreignKey' => 'Journée_idJournée',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('nomJournée');

        $validator
            ->integer('Competition_idCompetition')
            ->requirePresence('Competition_idCompetition', 'create')
            ->notEmpty('Competition_idCompetition');

        return $validator;
    }
}
