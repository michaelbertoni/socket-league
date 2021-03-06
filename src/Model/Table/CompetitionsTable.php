<?php
namespace App\Model\Table;

use App\Model\Entity\Competition;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Competitions Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Equipes
 * @property \Cake\ORM\Association\hasMany $Journees
 */
class CompetitionsTable extends Table
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

        $this->table('competitions');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsToMany('Equipes', [
            'foreignKey' => 'Competition_idCompetition',
            'targetForeignKey' => 'Equipe_idEquipe',
            'joinTable' => 'equipes_competitions'
        ]);

        $this->hasMany('Journees', [
                'foreignKey' => 'Competition_idCompetition',
                'dependent' => true,
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
            ->allowEmpty('nomCompetition');

        $validator
            ->allowEmpty('zoneCompetition');

        $validator
            ->allowEmpty('nbEquipeCompetition');

        $validator
            ->integer('ptsGagneCompetition')
            ->allowEmpty('ptsGagneCompetition');

        $validator
            ->integer('ptsPerduCompetition')
            ->allowEmpty('ptsPerduCompetition');

        $validator
            ->integer('ptsNulCompetition')
            ->allowEmpty('ptsNulCompetition');

        $validator
            ->allowEmpty('typeClsmtExAequoCompetition');

        return $validator;
    }
}
