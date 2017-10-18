<?php
namespace HarderWork\FootballData\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use HarderWork\FootballData\Model\Table\FixturesTable;

/**
 * HarderWork\FootballData\Model\Table\FixturesTable Test Case
 */
class FixturesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var HarderWork\FootballData\Model\Table\FixturesTable
     */
    public $Fixtures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.HarderWork/FootballData.fixtures',
        'plugin.HarderWork/FootballData.leagues',
        'plugin.HarderWork/FootballData.seasons',
        'plugin.HarderWork/FootballData.teams',
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
