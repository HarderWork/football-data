<?php
namespace HarderWork\FootballData\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use HarderWork\FootballData\Model\Table\TeamsTable;

/**
 * HarderWork\FootballData\Model\Table\TeamsTable Test Case
 */
class TeamsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \HarderWork\FootballData\Model\Table\TeamsTable
     */
    public $Teams;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.HarderWork/FootballData.teams',
        'plugin.HarderWork/FootballData.leagues',
        'plugin.HarderWork/FootballData.team_aliases',
        'plugin.HarderWork/FootballData.team_results'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Teams') ? [] : ['className' => TeamsTable::class];
        $this->Teams = TableRegistry::get('Teams', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Teams);

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
