<?php
namespace HarderWork\FootballData\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use HarderWork\FootballData\Model\Table\TeamResultsTable;
use Cake\Datasource\ConnectionManager;

/**
 * HarderWork\FootballData\Model\Table\TeamResultsTable Test Case
 */
class TeamResultsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var HarderWork\\FootballData\Model\Table\TeamResultsTable
     */
    public $TeamResults;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.HarderWork/FootballData.team_results',
        'plugin.HarderWork/FootballData.teams',
        'plugin.HarderWork/FootballData.fixtures',
        'plugin.HarderWork/FootballData.leagues',
        'plugin.HarderWork/FootballData.seasons'
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

    /**
     * Test getOverallTable method
     *
     * @return void
     */
    public function testGetOverallTable()
    {
        // Test date limit, all games
        $result = $this->TeamResults->getOverallTable(0, 0, 'all', '1993-08-31', 1)->toArray();

        // First team
        $team = $result[0];
        $this->assertEquals(5, $team->GP);
        $this->assertEquals(4, $team->W);
        $this->assertEquals(1, $team->D);
        $this->assertEquals(0, $team->L);
        $this->assertEquals(11, $team->GF);
        $this->assertEquals(3, $team->GA);
        $this->assertEquals(8, $team->Diff);
        $this->assertEquals(13, $team->Points);
        $this->assertEquals(130084, $team->Sort);
        $this->assertEquals('Manchester U', $team->team->name);

        // Last team
        $team = $result[21];
        $this->assertEquals(5, $team->GP);
        $this->assertEquals(0, $team->W);
        $this->assertEquals(1, $team->D);
        $this->assertEquals(4, $team->L);
        $this->assertEquals(2, $team->GF);
        $this->assertEquals(14, $team->GA);
        $this->assertEquals(-12, $team->Diff);
        $this->assertEquals(1, $team->Points);
        $this->assertEquals(9880, $team->Sort);
        $this->assertEquals('Swindon', $team->team->name);

        // Test date limit, home games
        $result = $this->TeamResults->getOverallTable(0, 0, 'home', '1993-08-31', 1)->toArray();

        // First team
        $team = $result[0];
        $this->assertEquals(3, $team->GP);
        $this->assertEquals(2, $team->W);
        $this->assertEquals(1, $team->D);
        $this->assertEquals(0, $team->L);
        $this->assertEquals(6, $team->GF);
        $this->assertEquals(3, $team->GA);
        $this->assertEquals(3, $team->Diff);
        $this->assertEquals(7, $team->Points);
        $this->assertEquals(70032, $team->Sort);
        $this->assertEquals('Sheffield U', $team->team->name);

        // Last team
        $team = $result[21];
        $this->assertEquals(2, $team->GP);
        $this->assertEquals(0, $team->W);
        $this->assertEquals(0, $team->D);
        $this->assertEquals(2, $team->L);
        $this->assertEquals(0, $team->GF);
        $this->assertEquals(6, $team->GA);
        $this->assertEquals(-6, $team->Diff);
        $this->assertEquals(0, $team->Points);
        $this->assertEquals(-60, $team->Sort);
        $this->assertEquals('Swindon', $team->team->name);

        // Test date limit, away games
        $result = $this->TeamResults->getOverallTable(0, 0, 'away', '1993-08-31', 1)->toArray();

        // First team
        $team = $result[0];
        $this->assertEquals(3, $team->GP);
        $this->assertEquals(3, $team->W);
        $this->assertEquals(0, $team->D);
        $this->assertEquals(0, $team->L);
        $this->assertEquals(7, $team->GF);
        $this->assertEquals(2, $team->GA);
        $this->assertEquals(5, $team->Diff);
        $this->assertEquals(9, $team->Points);
        $this->assertEquals(90053, $team->Sort);
        $this->assertEquals('Manchester U', $team->team->name);

        // Last team
        $team = $result[21];
        $this->assertEquals(2, $team->GP);
        $this->assertEquals(0, $team->W);
        $this->assertEquals(0, $team->D);
        $this->assertEquals(2, $team->L);
        $this->assertEquals(2, $team->GF);
        $this->assertEquals(7, $team->GA);
        $this->assertEquals(-5, $team->Diff);
        $this->assertEquals(0, $team->Points);
        $this->assertEquals(-50, $team->Sort);
        $this->assertEquals('Sheffield U', $team->team->name);

        // Test games played, all
        $result = $this->TeamResults->getOverallTable(0, 0, 'all', '9999-12-31', 1)->toArray();

        // First team
        $team = $result[0];
        $this->assertEquals(42, $team->GP);
        $this->assertEquals(27, $team->W);
        $this->assertEquals(11, $team->D);
        $this->assertEquals(4, $team->L);
        $this->assertEquals(80, $team->GF);
        $this->assertEquals(38, $team->GA);
        $this->assertEquals(42, $team->Diff);
        $this->assertEquals(92, $team->Points);
        $this->assertEquals(920447, $team->Sort);
        $this->assertEquals('Manchester U', $team->team->name);

        // Last team
        $team = $result[21];
        $this->assertEquals(42, $team->GP);
        $this->assertEquals(5, $team->W);
        $this->assertEquals(15, $team->D);
        $this->assertEquals(22, $team->L);
        $this->assertEquals(47, $team->GF);
        $this->assertEquals(100, $team->GA);
        $this->assertEquals(-53, $team->Diff);
        $this->assertEquals(30, $team->Points);
        $this->assertEquals(299475, $team->Sort);
        $this->assertEquals('Swindon', $team->team->name);

        // Test games played, home
        $result = $this->TeamResults->getOverallTable(0, 0, 'home', '9999-12-31', 1)->toArray();

        // First team
        $team = $result[0];
        $this->assertEquals(21, $team->GP);
        $this->assertEquals(14, $team->W);
        $this->assertEquals(6, $team->D);
        $this->assertEquals(1, $team->L);
        $this->assertEquals(39, $team->GF);
        $this->assertEquals(13, $team->GA);
        $this->assertEquals(26, $team->Diff);
        $this->assertEquals(48, $team->Points);
        $this->assertEquals(480274, $team->Sort);
        $this->assertEquals('Manchester U', $team->team->name);

        // Last team
        $team = $result[21];
        $this->assertEquals(21, $team->GP);
        $this->assertEquals(4, $team->W);
        $this->assertEquals(7, $team->D);
        $this->assertEquals(10, $team->L);
        $this->assertEquals(25, $team->GF);
        $this->assertEquals(45, $team->GA);
        $this->assertEquals(-20, $team->Diff);
        $this->assertEquals(19, $team->Points);
        $this->assertEquals(189804, $team->Sort);
        $this->assertEquals('Swindon', $team->team->name);

        // Test games played, away
        $result = $this->TeamResults->getOverallTable(0, 0, 'away', '9999-12-31', 1)->toArray();

        // First team
        $team = $result[0];
        $this->assertEquals(21, $team->GP);
        $this->assertEquals(13, $team->W);
        $this->assertEquals(5, $team->D);
        $this->assertEquals(3, $team->L);
        $this->assertEquals(41, $team->GF);
        $this->assertEquals(25, $team->GA);
        $this->assertEquals(16, $team->Diff);
        $this->assertEquals(44, $team->Points);
        $this->assertEquals(440173, $team->Sort);
        $this->assertEquals('Manchester U', $team->team->name);

        // Last team
        $team = $result[21];
        $this->assertEquals(21, $team->GP);
        $this->assertEquals(1, $team->W);
        $this->assertEquals(8, $team->D);
        $this->assertEquals(12, $team->L);
        $this->assertEquals(22, $team->GF);
        $this->assertEquals(55, $team->GA);
        $this->assertEquals(-33, $team->Diff);
        $this->assertEquals(11, $team->Points);
        $this->assertEquals(109671, $team->Sort);
        $this->assertEquals('Swindon', $team->team->name);

    }

    /**
     * Test getTeamsInLeague method
     *
     * @return void
     */
    public function testGetTeamsInLeague()
    {
        $result = $this->TeamResults->getTeamsInLeague(0, 0)->toArray();
        debug($result);
    }
}
