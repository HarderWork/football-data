<?php
namespace HarderWork\FootballData\Controller;

use HarderWork\FootballData\Controller\AppController;

/**
 * TeamAliases Controller
 *
 * @property \HarderWork\FootballData\Model\Table\TeamAliasesTable $TeamAliases
 *
 * @method \HarderWork\FootballData\Model\Entity\TeamAlias[] paginate($object = null, array $settings = [])
 */
class TeamAliasesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Teams']
        ];
        $teamAliases = $this->paginate($this->TeamAliases);

        $this->set(compact('teamAliases'));
        $this->set('_serialize', ['teamAliases']);
    }

    /**
     * View method
     *
     * @param string|null $id Team Alias id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $teamAlias = $this->TeamAliases->get($id, [
            'contain' => ['Teams']
        ]);

        $this->set('teamAlias', $teamAlias);
        $this->set('_serialize', ['teamAlias']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $teamAlias = $this->TeamAliases->newEntity();
        if ($this->request->is('post')) {
            $teamAlias = $this->TeamAliases->patchEntity($teamAlias, $this->request->getData());
            if ($this->TeamAliases->save($teamAlias)) {
                $this->Flash->success(__('The team alias has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The team alias could not be saved. Please, try again.'));
        }
        $teams = $this->TeamAliases->Teams->find('list', ['limit' => 200]);
        $this->set(compact('teamAlias', 'teams'));
        $this->set('_serialize', ['teamAlias']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Team Alias id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $teamAlias = $this->TeamAliases->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $teamAlias = $this->TeamAliases->patchEntity($teamAlias, $this->request->getData());
            if ($this->TeamAliases->save($teamAlias)) {
                $this->Flash->success(__('The team alias has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The team alias could not be saved. Please, try again.'));
        }
        $teams = $this->TeamAliases->Teams->find('list', ['limit' => 200]);
        $this->set(compact('teamAlias', 'teams'));
        $this->set('_serialize', ['teamAlias']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Team Alias id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $teamAlias = $this->TeamAliases->get($id);
        if ($this->TeamAliases->delete($teamAlias)) {
            $this->Flash->success(__('The team alias has been deleted.'));
        } else {
            $this->Flash->error(__('The team alias could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
