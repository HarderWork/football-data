<?php
namespace HarderWork\FootballData\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use FootballData\Model\Table\FixturesTable;

/**
 * FootballData\Model\Table\FixturesTable Test Case
 */
class FixturesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \FootballData\Model\Table\FixturesTable
     */
    public $Fixtures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.football_data.fixtures',
        'plugin.football_data.leagues',
        'plugin.football_data.seasons',
        'plugin.football_data.teams',
        'plugin.football_data.team_results'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Fixtures') ? [] : ['className' => FixturesTable::class];
        $this->Fixtures = TableRegistry::get('Fixtures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fixtures);

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
