<?php
namespace FootballData\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TeamAliasesFixture
 *
 */
class TeamAliasesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'name' => ['type' => 'string', 'length' => 256, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'team_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'created' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'modified' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'name' => 'Manchester U',
            'team_id' => 1,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Coventry',
            'team_id' => 2,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Everton',
            'team_id' => 3,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Wimbledon',
            'team_id' => 4,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Swindon',
            'team_id' => 5,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Leeds',
            'team_id' => 6,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Aston Villa',
            'team_id' => 7,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Liverpool',
            'team_id' => 8,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'West Ham',
            'team_id' => 9,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Southampton',
            'team_id' => 10,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Chelsea',
            'team_id' => 11,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Sheffield U',
            'team_id' => 12,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Sheffield W',
            'team_id' => 13,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Manchester C',
            'team_id' => 14,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Norwich',
            'team_id' => 15,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Oldham',
            'team_id' => 16,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Blackburn',
            'team_id' => 17,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Ipswich',
            'team_id' => 18,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Newcastle',
            'team_id' => 19,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Arsenal',
            'team_id' => 20,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Tottenham',
            'team_id' => 21,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Queens PR',
            'team_id' => 22,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Crystal P',
            'team_id' => 23,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Leicester',
            'team_id' => 24,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Nottingham',
            'team_id' => 25,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Bolton',
            'team_id' => 26,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Middlesbrough',
            'team_id' => 27,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Derby',
            'team_id' => 28,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Sunderland',
            'team_id' => 29,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Barnsley',
            'team_id' => 30,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Charlton',
            'team_id' => 31,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Bradford',
            'team_id' => 32,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Watford',
            'team_id' => 33,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Fulham',
            'team_id' => 34,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'West Bromwich',
            'team_id' => 35,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Birmingham',
            'team_id' => 36,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Portsmouth',
            'team_id' => 37,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Wolverhampton',
            'team_id' => 38,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Wigan',
            'team_id' => 39,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Reading',
            'team_id' => 40,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Stoke',
            'team_id' => 41,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Luton',
            'team_id' => 42,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Tranmere',
            'team_id' => 43,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Oxford',
            'team_id' => 44,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Notts County',
            'team_id' => 45,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Grimsby',
            'team_id' => 46,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Millwall',
            'team_id' => 47,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Bristol C',
            'team_id' => 48,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Peterborough',
            'team_id' => 49,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Southend',
            'team_id' => 50,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Manchester United',
            'team_id' => 1,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Coventry City',
            'team_id' => 2,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Swindon Town',
            'team_id' => 5,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Leeds United',
            'team_id' => 6,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'West Ham United',
            'team_id' => 9,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Sheffield United',
            'team_id' => 12,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Sheffield Wedn&hellip;',
            'team_id' => 13,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Manchester City',
            'team_id' => 14,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Norwich City',
            'team_id' => 15,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Oldham Athletic',
            'team_id' => 16,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Blackburn Rovers',
            'team_id' => 17,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Ipswich Town',
            'team_id' => 18,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Newcastle United',
            'team_id' => 19,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Tottenham Hotspur',
            'team_id' => 21,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Queens Park Ra&hellip;',
            'team_id' => 22,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Crystal Palace',
            'team_id' => 23,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Leicester City',
            'team_id' => 24,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Nottingham Forest',
            'team_id' => 25,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Bolton Wanderers',
            'team_id' => 26,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Derby County',
            'team_id' => 28,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Charlton Athletic',
            'team_id' => 31,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Bradford City',
            'team_id' => 32,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'West Bromwich &hellip;',
            'team_id' => 35,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Birmingham City',
            'team_id' => 36,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Wolverhampton &hellip;',
            'team_id' => 38,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Wigan Athletic',
            'team_id' => 39,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Stoke City',
            'team_id' => 41,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Luton Town',
            'team_id' => 42,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Tranmere Rovers',
            'team_id' => 43,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Oxford United',
            'team_id' => 44,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Grimsby Town',
            'team_id' => 46,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Bristol City',
            'team_id' => 48,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Peterborough U&hellip;',
            'team_id' => 49,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Southend United',
            'team_id' => 50,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Huddersfield Town',
            'team_id' => 53,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Stockport County',
            'team_id' => 55,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Crewe Alexandra',
            'team_id' => 56,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Preston North End',
            'team_id' => 59,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Rotherham United',
            'team_id' => 60,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Brighton & Hov&hellip;',
            'team_id' => 61,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Cardiff City',
            'team_id' => 62,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Plymouth Argyle',
            'team_id' => 63,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Colchester United',
            'team_id' => 65,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Exeter City',
            'team_id' => 66,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Cambridge United',
            'team_id' => 69,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Bristol Rovers',
            'team_id' => 70,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Wrexham FC',
            'team_id' => 72,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Hartlepool United',
            'team_id' => 75,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'name' => 'Swansea City',
            'team_id' => 76,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
    ];
}
