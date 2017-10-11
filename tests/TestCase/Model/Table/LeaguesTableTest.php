<?php
namespace HarderWork\FootballData\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use HarderWork\FootballData\Model\Table\LeaguesTable;

/**
 * HarderWork\FootballData\Model\Table\LeaguesTable Test Case
 */
class LeaguesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \FootballData\Model\Table\LeaguesTable
     */
    public $Leagues;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.football_data.leagues',
        'plugin.football_data.seasons',
        'plugin.football_data.fixtures',
        'plugin.football_data.team_results',
        'plugin.football_data.teams'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Leagues') ? [] : ['className' => LeaguesTable::class];
        $this->Leagues = TableRegistry::get('Leagues', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Leagues);

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
