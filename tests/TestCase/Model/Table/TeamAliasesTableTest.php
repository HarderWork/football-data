<?php
namespace HarderWork\FootballData\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use FootballData\Model\Table\TeamAliasesTable;

/**
 * FootballData\Model\Table\TeamAliasesTable Test Case
 */
class TeamAliasesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \FootballData\Model\Table\TeamAliasesTable
     */
    public $TeamAliases;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.football_data.team_aliases',
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
        $config = TableRegistry::exists('TeamAliases') ? [] : ['className' => TeamAliasesTable::class];
        $this->TeamAliases = TableRegistry::get('TeamAliases', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TeamAliases);

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
