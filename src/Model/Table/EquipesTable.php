<?php
namespace App\Model\Table;

use App\Model\Entity\Equipe;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Equipes Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Competitions
 */
class EquipesTable extends Table
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

        $this->table('equipes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsToMany('Competitions', [
            'foreignKey' => 'equipe_id',
            'targetForeignKey' => 'competition_id',
            'joinTable' => 'equipes_competitions'
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
            ->allowEmpty('nomEquipe')
            ->add('nomEquipe', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('nomCourt');

        $validator
            ->allowEmpty('presidentEquipe');

        $validator
            ->integer('dateFondationEquipe')
            ->allowEmpty('dateFondationEquipe');

        $validator
            ->allowEmpty('entraineurEquipe');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['nomEquipe']));
        return $rules;
    }
}
