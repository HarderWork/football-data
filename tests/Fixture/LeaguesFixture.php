<?php
namespace HarderWork\FootballData\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LeaguesFixture
 *
 */
class LeaguesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'code' => ['type' => 'string', 'length' => 6, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'name' => ['type' => 'string', 'length' => 30, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'season_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'teams_in_league' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'results_url' => ['type' => 'string', 'length' => 256, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'xmlsoccer_leagueid' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'created' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'modified' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
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
            'id' => 0,
            'code' => 'eng0',
            'name' => 'Premier League, England',
            'season_id' => 46,
            'teams_in_league' => 20,
            'results_url' => 'http://nr.soccerway.com/national/england/premier-league/20162017/regular-season/r35992/matches/',
            'xmlsoccer_leagueid' => 1,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 1,
            'code' => 'eng1',
            'name' => 'Championship League, England',
            'season_id' => 46,
            'teams_in_league' => 24,
            'results_url' => 'http://nr.soccerway.com/national/england/championship/20162017/regular-season/r36638/matches/',
            'xmlsoccer_leagueid' => 2,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 2,
            'code' => 'eng2',
            'name' => 'League One, England',
            'season_id' => 46,
            'teams_in_league' => 24,
            'results_url' => 'http://int.soccerway.com/national/england/league-one/20162017/regular-season/r36641/matches/',
            'xmlsoccer_leagueid' => 38,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 3,
            'code' => 'eng3',
            'name' => 'League Two, England',
            'season_id' => 46,
            'teams_in_league' => 24,
            'results_url' => 'http://int.soccerway.com/national/england/league-two/20162017/regular-season/r36644/matches/',
            'xmlsoccer_leagueid' => 39,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 4,
            'code' => 'ita0',
            'name' => 'Serie A, Italien',
            'season_id' => 46,
            'teams_in_league' => 20,
            'results_url' => '',
            'xmlsoccer_leagueid' => 5,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 5,
            'code' => 'ita1',
            'name' => 'Serie B, Italien',
            'season_id' => 46,
            'teams_in_league' => 22,
            'results_url' => '',
            'xmlsoccer_leagueid' => 6,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 8,
            'code' => 'spa1',
            'name' => 'Primera Division, Spain',
            'season_id' => 46,
            'teams_in_league' => 20,
            'results_url' => 'http://nr.soccerway.com/national/spain/primera-division/20162017/regular-season/r35880/matches/',
            'xmlsoccer_leagueid' => 8,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 9,
            'code' => 'spa2',
            'name' => 'Segunda Division, Spain',
            'season_id' => 46,
            'teams_in_league' => 22,
            'results_url' => 'http://nr.soccerway.com/national/spain/segunda-division/20152016/regular-season/r32028/matches/',
            'xmlsoccer_leagueid' => 48,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 10,
            'code' => 'swe0',
            'name' => 'Allsvenskan',
            'season_id' => 49,
            'teams_in_league' => 16,
            'results_url' => 'http://nr.soccerway.com/national/sweden/allsvenskan/2017/regular-season/r39293/matches/',
            'xmlsoccer_leagueid' => 33,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 11,
            'code' => 'swe1',
            'name' => 'Superettan',
            'season_id' => 49,
            'teams_in_league' => 16,
            'results_url' => 'http://nr.soccerway.com/national/sweden/superettan/2017/regular-season/r39292/matches/',
            'xmlsoccer_leagueid' => 50,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 12,
            'code' => 'den0',
            'name' => 'Superligaen, Danmark',
            'season_id' => 46,
            'teams_in_league' => 14,
            'results_url' => 'http://nr.soccerway.com/national/denmark/superliga/20162017/regular-season/r36663/matches/',
            'xmlsoccer_leagueid' => 14,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 13,
            'code' => 'den1',
            'name' => 'Division 1, Danmark',
            'season_id' => 46,
            'teams_in_league' => 12,
            'results_url' => 'http://nr.soccerway.com/national/denmark/1st-division/20162017/regular-season/r36964/matches/',
            'xmlsoccer_leagueid' => null,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 14,
            'code' => 'dut0',
            'name' => 'Eredivisie',
            'season_id' => 46,
            'teams_in_league' => 18,
            'results_url' => 'http://nr.soccerway.com/national/netherlands/eredivisie/20162017/regular-season/r36385/matches/',
            'xmlsoccer_leagueid' => 10,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 15,
            'code' => 'dut1',
            'name' => 'Eerste Divisie',
            'season_id' => 46,
            'teams_in_league' => 20,
            'results_url' => 'http://nr.soccerway.com/national/netherlands/eerste-divisie/20162017/regular-season/r35439/matches/',
            'xmlsoccer_leagueid' => null,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 16,
            'code' => 'fin0',
            'name' => 'Veikkausliiga',
            'season_id' => 49,
            'teams_in_league' => 12,
            'results_url' => 'http://nr.soccerway.com/national/finland/veikkausliiga/2017/regular-season/r39409/matches/',
            'xmlsoccer_leagueid' => null,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 17,
            'code' => 'fin1',
            'name' => 'Finnish Ykkonen',
            'season_id' => 49,
            'teams_in_league' => 10,
            'results_url' => 'http://nr.soccerway.com/national/finland/ykkonen/2017/regular-season/r39145/matches/',
            'xmlsoccer_leagueid' => null,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 18,
            'code' => 'fre0',
            'name' => 'Ligue 1',
            'season_id' => 46,
            'teams_in_league' => 20,
            'results_url' => 'http://nr.soccerway.com/national/france/ligue-1/20162017/regular-season/r35879/matches/',
            'xmlsoccer_leagueid' => 7,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 19,
            'code' => 'fre1',
            'name' => 'Ligue 2',
            'season_id' => 46,
            'teams_in_league' => 20,
            'results_url' => 'http://nr.soccerway.com/national/france/ligue-2/20162017/regular-season/r35875/matches/',
            'xmlsoccer_leagueid' => 49,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 20,
            'code' => 'fre2',
            'name' => 'National',
            'season_id' => 40,
            'teams_in_league' => 20,
            'results_url' => '',
            'xmlsoccer_leagueid' => null,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 21,
            'code' => 'ger1',
            'name' => 'Bundesliga, Tyskland',
            'season_id' => 46,
            'teams_in_league' => 18,
            'results_url' => '',
            'xmlsoccer_leagueid' => 4,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 22,
            'code' => 'ger2',
            'name' => '2. Bundesliga, Tyskland',
            'season_id' => 46,
            'teams_in_league' => 18,
            'results_url' => '',
            'xmlsoccer_leagueid' => 47,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 23,
            'code' => 'ire0',
            'name' => 'Premier League, Ireland',
            'season_id' => 37,
            'teams_in_league' => 12,
            'results_url' => '',
            'xmlsoccer_leagueid' => null,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 24,
            'code' => 'nor0',
            'name' => 'Eliteserien, Norge',
            'season_id' => 47,
            'teams_in_league' => 16,
            'results_url' => '',
            'xmlsoccer_leagueid' => 44,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 25,
            'code' => 'nor1',
            'name' => '1. Divisjon, Norge',
            'season_id' => 49,
            'teams_in_league' => 16,
            'results_url' => '',
            'xmlsoccer_leagueid' => 52,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 26,
            'code' => 'por0',
            'name' => 'Primeira Liga, Portugal',
            'season_id' => 46,
            'teams_in_league' => 18,
            'results_url' => '',
            'xmlsoccer_leagueid' => 18,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 27,
            'code' => 'por1',
            'name' => 'Liga de Honra, Portugal',
            'season_id' => 44,
            'teams_in_league' => 16,
            'results_url' => '',
            'xmlsoccer_leagueid' => null,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 28,
            'code' => 'sco0',
            'name' => 'Premier League, Skottland',
            'season_id' => 46,
            'teams_in_league' => 12,
            'results_url' => '',
            'xmlsoccer_leagueid' => 3,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 29,
            'code' => 'sco1',
            'name' => 'First Division, Skottland',
            'season_id' => 46,
            'teams_in_league' => 10,
            'results_url' => '',
            'xmlsoccer_leagueid' => 19,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 30,
            'code' => 'sco2',
            'name' => 'Second Division, Skottland',
            'season_id' => 40,
            'teams_in_league' => 10,
            'results_url' => '',
            'xmlsoccer_leagueid' => null,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 31,
            'code' => 'bra0',
            'name' => 'Serie A, Brazil',
            'season_id' => 37,
            'teams_in_league' => 20,
            'results_url' => '',
            'xmlsoccer_leagueid' => null,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 32,
            'code' => 'aus0',
            'name' => 'Bundesliga, Austria',
            'season_id' => 40,
            'teams_in_league' => 10,
            'results_url' => '',
            'xmlsoccer_leagueid' => null,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 33,
            'code' => 'aus1',
            'name' => '1. Liga, Austria',
            'season_id' => 40,
            'teams_in_league' => 10,
            'results_url' => '',
            'xmlsoccer_leagueid' => null,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 34,
            'code' => 'bel0',
            'name' => 'First Division A, Belgium',
            'season_id' => 46,
            'teams_in_league' => 16,
            'results_url' => '',
            'xmlsoccer_leagueid' => 11,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 35,
            'code' => 'bel1',
            'name' => '2. Division, Belgium',
            'season_id' => 40,
            'teams_in_league' => 18,
            'results_url' => '',
            'xmlsoccer_leagueid' => null,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 36,
            'code' => 'bul0',
            'name' => 'A PFG, Bulgaria',
            'season_id' => 40,
            'teams_in_league' => 16,
            'results_url' => '',
            'xmlsoccer_leagueid' => null,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 37,
            'code' => 'cze1',
            'name' => 'Czech Liga',
            'season_id' => 40,
            'teams_in_league' => 16,
            'results_url' => '',
            'xmlsoccer_leagueid' => null,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 38,
            'code' => 'cze2',
            'name' => '2. Liga, Czech',
            'season_id' => 40,
            'teams_in_league' => 16,
            'results_url' => '',
            'xmlsoccer_leagueid' => null,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 39,
            'code' => 'rom0',
            'name' => 'Liga 1, Romania',
            'season_id' => 40,
            'teams_in_league' => 18,
            'results_url' => '',
            'xmlsoccer_leagueid' => null,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 40,
            'code' => 'rus0',
            'name' => 'Premier League, Ryssland',
            'season_id' => 46,
            'teams_in_league' => 16,
            'results_url' => '',
            'xmlsoccer_leagueid' => 41,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 41,
            'code' => 'rus1',
            'name' => '1. Division, Russia',
            'season_id' => 37,
            'teams_in_league' => 20,
            'results_url' => '',
            'xmlsoccer_leagueid' => null,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 42,
            'code' => 'ser0',
            'name' => 'Super Liga, Serbia',
            'season_id' => 40,
            'teams_in_league' => 16,
            'results_url' => '',
            'xmlsoccer_leagueid' => null,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 43,
            'code' => 'slo0',
            'name' => '1. SNL, Slovenia',
            'season_id' => 40,
            'teams_in_league' => 10,
            'results_url' => '',
            'xmlsoccer_leagueid' => null,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 44,
            'code' => 'swi1',
            'name' => 'Super League, Switzerland',
            'season_id' => 40,
            'teams_in_league' => 10,
            'results_url' => '',
            'xmlsoccer_leagueid' => null,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 45,
            'code' => 'swi2',
            'name' => 'Challenge League, Switzerland',
            'season_id' => 40,
            'teams_in_league' => 16,
            'results_url' => '',
            'xmlsoccer_leagueid' => null,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 46,
            'code' => 'ukr0',
            'name' => 'Premier League, Ukraine',
            'season_id' => 40,
            'teams_in_league' => 16,
            'results_url' => '',
            'xmlsoccer_leagueid' => null,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 47,
            'code' => 'swe2s',
            'name' => 'Division 1 Södra',
            'season_id' => 49,
            'teams_in_league' => 14,
            'results_url' => 'http://nr.soccerway.com/national/sweden/division-1/2017/sodra/r39858/matches/',
            'xmlsoccer_leagueid' => null,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
        [
            'id' => 48,
            'code' => 'swe2n',
            'name' => 'Division 1 Norra',
            'season_id' => 49,
            'teams_in_league' => 14,
            'results_url' => 'http://nr.soccerway.com/national/sweden/division-1/2017/norra/r39857/matches/',
            'xmlsoccer_leagueid' => null,
            'created' => '2017-08-31 00:00:00',
            'modified' => '2017-08-31 00:00:00',
        ],
    ];
}
