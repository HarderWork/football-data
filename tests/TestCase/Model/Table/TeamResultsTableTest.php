<?php
namespace FootballData\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use FootballData\Model\Table\TeamResultsTable;

/**
 * FootballData\Model\Table\TeamResultsTable Test Case
 */
class TeamResultsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \FootballData\Model\Table\TeamResultsTable
     */
    public $TeamResults;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.football_data.team_results',
        'plugin.football_data.teams',
        'plugin.football_data.fixtures',
        'plugin.football_data.leagues',
        'plugin.football_data.seasons'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TeamResults') ? [] : ['className' => TeamResultsTable::class];
        $this->TeamResults = TableRegistry::get('TeamResults', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TeamResults);

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
