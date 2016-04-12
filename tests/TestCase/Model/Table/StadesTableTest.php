<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StadesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StadesTable Test Case
 */
class StadesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StadesTable
     */
    public $Stades;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stades'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Stades') ? [] : ['className' => 'App\Model\Table\StadesTable'];
        $this->Stades = TableRegistry::get('Stades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Stades);

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
}
