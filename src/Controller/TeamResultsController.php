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
