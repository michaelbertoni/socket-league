<?php
namespace App\Model\Table;

use App\Model\Entity\Stade;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Stades Model
 *
 */
class StadesTable extends Table
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

        $this->table('stades');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->allowEmpty('nomStade');

        $validator
            ->integer('capaciteStade')
            ->allowEmpty('capaciteStade');

        $validator
            ->allowEmpty('adresseStade');

        $validator
            ->allowEmpty('telephoneStade');

        $validator
            ->integer('Equipe_idEquipe')
            ->requirePresence('Equipe_idEquipe', 'create')
            ->notEmpty('Equipe_idEquipe');

        return $validator;
    }
}
