<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EquipesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EquipesTable Test Case
 */
class EquipesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EquipesTable
     */
    public $Equipes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.equipes',
        'app.competitions',
        'app.equipes_competitions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Equipes') ? [] : ['className' => 'App\Model\Table\EquipesTable'];
        $this->Equipes = TableRegistry::get('Equipes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Equipes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
