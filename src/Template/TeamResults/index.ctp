<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\FootballData.TeamResult[]|\Cake\Collection\CollectionInterface $teamResults
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Team Result'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fixtures'), ['controller' => 'Fixtures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fixture'), ['controller' => 'Fixtures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Leagues'), ['controller' => 'Leagues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New League'), ['controller' => 'Leagues', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Seasons'), ['controller' => 'Seasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Season'), ['controller' => 'Seasons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="teamResults index large-9 medium-8 columns content">
    <h3><?= __('Team Results') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fixture_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('game_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('league_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('season_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('round') ?></th>
                <th scope="col"><?= $this->Paginator->sort('home_team') ?></th>
                <th scope="col"><?= $this->Paginator->sort('game_played') ?></th>
                <th scope="col"><?= $this->Paginator->sort('win') ?></th>
                <th scope="col"><?= $this->Paginator->sort('draw') ?></th>
                <th scope="col"><?= $this->Paginator->sort('loss') ?></th>
                <th scope="col"><?= $this->Paginator->sort('goals_for') ?></th>
                <th scope="col"><?= $this->Paginator->sort('goals_against') ?></th>
                <th scope="col"><?= $this->Paginator->sort('points') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($teamResults as $teamResult): ?>
            <tr>
                <td><?= $this->Number->format($teamResult->id) ?></td>
                <td><?= $teamResult->has('team') ? $this->Html->link($teamResult->team->name, ['controller' => 'Teams', 'action' => 'view', $teamResult->team->id]) : '' ?></td>
                <td><?= $teamResult->has('fixture') ? $this->Html->link($teamResult->fixture->id, ['controller' => 'Fixtures', 'action' => 'view', $teamResult->fixture->id]) : '' ?></td>
                <td><?= h($teamResult->game_date) ?></td>
                <td><?= $teamResult->has('league') ? $this->Html->link($teamResult->league->name, ['controller' => 'Leagues', 'action' => 'view', $teamResult->league->id]) : '' ?></td>
                <td><?= $teamResult->has('season') ? $this->Html->link($teamResult->season->name, ['controller' => 'Seasons', 'action' => 'view', $teamResult->season->id]) : '' ?></td>
                <td><?= $this->Number->format($teamResult->round) ?></td>
                <td><?= $this->Number->format($teamResult->home_team) ?></td>
                <td><?= $this->Number->format($teamResult->game_played) ?></td>
                <td><?= $this->Number->format($teamResult->win) ?></td>
                <td><?= $this->Number->format($teamResult->draw) ?></td>
                <td><?= $this->Number->format($teamResult->loss) ?></td>
                <td><?= $this->Number->format($teamResult->goals_for) ?></td>
                <td><?= $this->Number->format($teamResult->goals_against) ?></td>
                <td><?= $this->Number->format($teamResult->points) ?></td>
                <td><?= h($teamResult->created) ?></td>
                <td><?= h($teamResult->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $teamResult->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $teamResult->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $teamResult->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamResult->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
