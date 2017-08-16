<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\FootballData.Fixture[]|\Cake\Collection\CollectionInterface $fixtures
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fixture'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Leagues'), ['controller' => 'Leagues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New League'), ['controller' => 'Leagues', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Seasons'), ['controller' => 'Seasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Season'), ['controller' => 'Seasons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Home Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Team Results'), ['controller' => 'TeamResults', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team Result'), ['controller' => 'TeamResults', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fixtures index large-9 medium-8 columns content">
    <h3><?= __('Fixtures') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('game_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('game_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('league_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('season_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('round') ?></th>
                <th scope="col"><?= $this->Paginator->sort('home_team_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('away_team_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('home_goals') ?></th>
                <th scope="col"><?= $this->Paginator->sort('away_goals') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('source') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fixtures as $fixture): ?>
            <tr>
                <td><?= $this->Number->format($fixture->id) ?></td>
                <td><?= h($fixture->game_date) ?></td>
                <td><?= h($fixture->game_start) ?></td>
                <td><?= $fixture->has('league') ? $this->Html->link($fixture->league->name, ['controller' => 'Leagues', 'action' => 'view', $fixture->league->id]) : '' ?></td>
                <td><?= $fixture->has('season') ? $this->Html->link($fixture->season->name, ['controller' => 'Seasons', 'action' => 'view', $fixture->season->id]) : '' ?></td>
                <td><?= $this->Number->format($fixture->round) ?></td>
                <td><?= $fixture->has('home_team') ? $this->Html->link($fixture->home_team->name, ['controller' => 'Teams', 'action' => 'view', $fixture->home_team->id]) : '' ?></td>
                <td><?= $fixture->has('away_team') ? $this->Html->link($fixture->away_team->name, ['controller' => 'Teams', 'action' => 'view', $fixture->away_team->id]) : '' ?></td>
                <td><?= $this->Number->format($fixture->home_goals) ?></td>
                <td><?= $this->Number->format($fixture->away_goals) ?></td>
                <td><?= $this->Number->format($fixture->status) ?></td>
                <td><?= $this->Number->format($fixture->source) ?></td>
                <td><?= h($fixture->created) ?></td>
                <td><?= h($fixture->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fixture->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fixture->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fixture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fixture->id)]) ?>
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
