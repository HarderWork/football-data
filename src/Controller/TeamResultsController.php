<?php
namespace FootballData\Controller;

use FootballData\Controller\AppController;

/**
 * TeamResults Controller
 *
 * @property \FootballData\Model\Table\TeamResultsTable $TeamResults
 *
 * @method \FootballData\Model\Entity\TeamResult[] paginate($object = null, array $settings = [])
 */
class TeamResultsController extends AppController
{

    public function getOverallTable($leagueId, $whichGames = 'all', $toDate = null, $gamePlayed = 0, $seasonId = null)
    {
        if (empty($toDate)) {
            $toDate = '9999-12-31';
        }
        if (empty($seasonId)) {
            $leagues = $this->TeamResults->Leagues->get($leagueId, ['cache' => 'footballdata', 'key' => 'league_' . $leagueId]);
            $seasonId = $leagues->season_id;
        }
        $table = $this->TeamResults->getOverallTable($leagueId, $seasonId, $whichGames, $toDate, $gamePlayed)->toArray();

        $this->set(compact('table'));
        $this->set('_serialize', ['table']);
    }

    public function getFormTable($leagueId)
    {
        $table = [
            ['id' => 284,'name' => 'IFK Göteborg','GP' => 6,'W' => 24,'D' => 7,'L' => 7,'GF' => 71,'GA' => 44,'Diff' => 27,'Points' => 79,'Sort' => 790294],
            ['id' => 271,'name' => 'Hammarby','GP' => 6,'W' => 20,'D' => 9,'L' => 6,'GF' => 67,'GA' => 36,'Diff' => 31,'Points' => 69,'Sort' => 690330],
            ['id' => 268,'name' => 'Elfsborg','GP' => 6,'W' => 20,'D' => 9,'L' => 8,'GF' => 75,'GA' => 50,'Diff' => 25,'Points' => 69,'Sort' => 690270],
            ['id' => 266,'name' => 'AIK','GP' => 6,'W' => 19,'D' => 9,'L' => 6,'GF' => 59,'GA' => 37,'Diff' => 22,'Points' => 66,'Sort' => 660239],
            ['id' => 275,'name' => 'IFK Norrköping','GP' => 6,'W' => 17,'D' => 9,'L' => 3,'GF' => 50,'GA' => 21,'Diff' => 29,'Points' => 60,'Sort' => 600307],
            ['id' => 282,'name' => 'Häcken','GP' => 34,'W' => 15,'D' => 7,'L' => 12,'GF' => 51,'GA' => 44,'Diff' => 7,'Points' => 52,'Sort' => 520085],
            ['id' => 267,'name' => 'Djurgården','GP' => 29,'W' => 14,'D' => 9,'L' => 6,'GF' => 51,'GA' => 35,'Diff' => 16,'Points' => 51,'Sort' => 510174],
            ['id' => 269,'name' => 'Malmö FF','GP' => 39,'W' => 11,'D' => 12,'L' => 16,'GF' => 47,'GA' => 54,'Diff' => -7,'Points' => 45,'Sort' => 449941],
            ['id' => 265,'name' => 'Helsingborg','GP' => 32,'W' => 11,'D' => 4,'L' => 17,'GF' => 44,'GA' => 50,'Diff' => -6,'Points' => 37,'Sort' => 369951],
            ['id' => 270,'name' => 'Kalmar FF','GP' => 35,'W' => 9,'D' => 9,'L' => 17,'GF' => 37,'GA' => 54,'Diff' => -17,'Points' => 36,'Sort' => 359839],
            ['id' => 273,'name' => 'Örebro','GP' => 29,'W' => 8,'D' => 10,'L' => 11,'GF' => 34,'GA' => 49,'Diff' => -15,'Points' => 34,'Sort' => 339858],
            ['id' => 274,'name' => 'Gefle','GP' => 33,'W' => 9,'D' => 7,'L' => 17,'GF' => 35,'GA' => 57,'Diff' => -22,'Points' => 34,'Sort' => 339789],
            ['id' => 289,'name' => 'GIF Sundsvall','GP' => 36,'W' => 9,'D' => 7,'L' => 20,'GF' => 39,'GA' => 63,'Diff' => -24,'Points' => 34,'Sort' => 339769],
            ['id' => 288,'name' => 'Falkenberg','GP' => 29,'W' => 6,'D' => 4,'L' => 19,'GF' => 37,'GA' => 56,'Diff' => -19,'Points' => 22,'Sort' => 219816],
            ['id' => 272,'name' => 'Halmstad','GP' => 30,'W' => 4,'D' => 10,'L' => 16,'GF' => 21,'GA' => 43,'Diff' => -22,'Points' => 22,'Sort' => 219784],
            ['id' => 278,'name' => 'Åtvidaberg','GP' => 28,'W' => 1,'D' => 8,'L' => 19,'GF' => 23,'GA' => 54,'Diff' => -31,'Points' => 11,'Sort' => 109691],
            ['id' => 292,'name' => 'Sirius','GP' => 3,'W' => 3,'D' => 0,'L' => 0,'GF' => 7,'GA' => 1,'Diff' => 6,'Points' => 9,'Sort' => 90063]
        ];

        $this->set(compact('table'));
        $this->set('_serialize', ['table']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Teams', 'Fixtures', 'Leagues', 'Seasons']
        ];
        $teamResults = $this->paginate($this->TeamResults);

        $this->set(compact('teamResults'));
        $this->set('_serialize', ['teamResults']);
    }

    /**
     * View method
     *
     * @param string|null $id Team Result id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $teamResult = $this->TeamResults->get($id, [
            'contain' => ['Teams', 'Fixtures', 'Leagues', 'Seasons']
        ]);

        $this->set('teamResult', $teamResult);
        $this->set('_serialize', ['teamResult']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $teamResult = $this->TeamResults->newEntity();
        if ($this->request->is('post')) {
            $teamResult = $this->TeamResults->patchEntity($teamResult, $this->request->getData());
            if ($this->TeamResults->save($teamResult)) {
                $this->Flash->success(__('The team result has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The team result could not be saved. Please, try again.'));
        }
        $teams = $this->TeamResults->Teams->find('list', ['limit' => 200]);
        $fixtures = $this->TeamResults->Fixtures->find('list', ['limit' => 200]);
        $leagues = $this->TeamResults->Leagues->find('list', ['limit' => 200]);
        $seasons = $this->TeamResults->Seasons->find('list', ['limit' => 200]);
        $this->set(compact('teamResult', 'teams', 'fixtures', 'leagues', 'seasons'));
        $this->set('_serialize', ['teamResult']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Team Result id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $teamResult = $this->TeamResults->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $teamResult = $this->TeamResults->patchEntity($teamResult, $this->request->getData());
            if ($this->TeamResults->save($teamResult)) {
                $this->Flash->success(__('The team result has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The team result could not be saved. Please, try again.'));
        }
        $teams = $this->TeamResults->Teams->find('list', ['limit' => 200]);
        $fixtures = $this->TeamResults->Fixtures->find('list', ['limit' => 200]);
        $leagues = $this->TeamResults->Leagues->find('list', ['limit' => 200]);
        $seasons = $this->TeamResults->Seasons->find('list', ['limit' => 200]);
        $this->set(compact('teamResult', 'teams', 'fixtures', 'leagues', 'seasons'));
        $this->set('_serialize', ['teamResult']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Team Result id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $teamResult = $this->TeamResults->get($id);
        if ($this->TeamResults->delete($teamResult)) {
            $this->Flash->success(__('The team result has been deleted.'));
        } else {
            $this->Flash->error(__('The team result could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
