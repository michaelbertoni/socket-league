<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MatchsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MatchsTable Test Case
 */
class MatchsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MatchsTable
     */
    public $Matchs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.matchs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Matchs') ? [] : ['className' => 'App\Model\Table\MatchsTable'];
        $this->Matchs = TableRegistry::get('Matchs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Matchs);

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
