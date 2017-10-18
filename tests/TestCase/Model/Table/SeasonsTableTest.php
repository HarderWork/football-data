<?php
namespace HarderWork\FootballData\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use HarderWork\FootballData\Model\Table\SeasonsTable;

/**
 * HarderWork\FootballData\Model\Table\SeasonsTable Test Case
 */
class SeasonsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \HarderWork\FootballData\Model\Table\SeasonsTable
     */
    public $Seasons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.HarderWork/FootballData.seasons',
        'plugin.HarderWork/FootballData.fixtures',
        'plugin.HarderWork/FootballData.leagues',
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
        $config = TableRegistry::exists('Seasons') ? [] : ['className' => SeasonsTable::class];
        $this->Seasons = TableRegistry::get('Seasons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Seasons);

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
