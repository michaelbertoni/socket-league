<?php
namespace App\Model\Table;

use App\Model\Entity\Match;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Matchs Model
 *
 */
class MatchsTable extends Table
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

        $this->table('matchs');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Equipes', [
            'foreignKey' => 'EquipeDomicile_idEquipe'
        ]);

        $this->belongsTo('Equipes', [
            'foreignKey' => 'EquipeVisiteur_idEquipe'
        ]);

        $this->belongsTo('Journees', [
            'foreignKey' => 'Journée_idJournée'
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
            ->integer('scoreEquipeDomicile')
            ->allowEmpty('scoreEquipeDomicile');

        $validator
            ->integer('scoreEquipeVisiteur')
            ->allowEmpty('scoreEquipeVisiteur');

        $validator
            ->integer('EquipeDomicile_idEquipe')
            ->requirePresence('EquipeDomicile_idEquipe', 'create')
            ->notEmpty('EquipeDomicile_idEquipe');

        $validator
            ->integer('EquipeVisiteur_idEquipe')
            ->requirePresence('EquipeVisiteur_idEquipe', 'create')
            ->notEmpty('EquipeVisiteur_idEquipe');

        $validator
            ->integer('Journée_idJournée')
            ->requirePresence('Journée_idJournée', 'create')
            ->notEmpty('Journée_idJournée');

        $validator
            ->date('dateMatch')
            ->requirePresence('dateMatch', 'create')
            ->notEmpty('dateMatch');

        return $validator;
    }
}
