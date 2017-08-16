<?php
namespace FootballData\Controller;

use FootballData\Controller\AppController;

/**
 * Fixtures Controller
 *
 * @property \FootballData\Model\Table\FixturesTable $Fixtures
 *
 * @method \FootballData\Model\Entity\Fixture[] paginate($object = null, array $settings = [])
 */
class FixturesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Leagues', 'Seasons', 'HomeTeams', 'AwayTeams']
        ];
        $fixtures = $this->paginate($this->Fixtures);

        $this->set(compact('fixtures'));
        $this->set('_serialize', ['fixtures']);
    }

    /**
     * View method
     *
     * @param string|null $id Fixture id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fixture = $this->Fixtures->get($id, [
            'contain' => ['Leagues', 'Seasons', 'HomeTeams', 'AwayTeams', 'TeamResults']
        ]);

        $this->set('fixture', $fixture);
        $this->set('_serialize', ['fixture']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fixture = $this->Fixtures->newEntity();
        if ($this->request->is('post')) {
            $fixture = $this->Fixtures->patchEntity($fixture, $this->request->getData());
            if ($this->Fixtures->save($fixture)) {
                $this->Flash->success(__('The fixture has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fixture could not be saved. Please, try again.'));
        }
        $leagues = $this->Fixtures->Leagues->find('list', ['limit' => 200]);
        $seasons = $this->Fixtures->Seasons->find('list', ['limit' => 200]);
        $homeTeams = $this->Fixtures->HomeTeams->find('list', ['limit' => 200]);
        $awayTeams = $this->Fixtures->AwayTeams->find('list', ['limit' => 200]);
        $this->set(compact('fixture', 'leagues', 'seasons', 'homeTeams', 'awayTeams'));
        $this->set('_serialize', ['fixture']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fixture id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fixture = $this->Fixtures->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fixture = $this->Fixtures->patchEntity($fixture, $this->request->getData());
            if ($this->Fixtures->save($fixture)) {
                $this->Flash->success(__('The fixture has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fixture could not be saved. Please, try again.'));
        }
        $leagues = $this->Fixtures->Leagues->find('list', ['limit' => 200]);
        $seasons = $this->Fixtures->Seasons->find('list', ['limit' => 200]);
        $homeTeams = $this->Fixtures->HomeTeams->find('list', ['limit' => 200]);
        $awayTeams = $this->Fixtures->AwayTeams->find('list', ['limit' => 200]);
        $this->set(compact('fixture', 'leagues', 'seasons', 'homeTeams', 'awayTeams'));
        $this->set('_serialize', ['fixture']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fixture id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fixture = $this->Fixtures->get($id);
        if ($this->Fixtures->delete($fixture)) {
            $this->Flash->success(__('The fixture has been deleted.'));
        } else {
            $this->Flash->error(__('The fixture could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
