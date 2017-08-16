<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\FootballData.League[]|\Cake\Collection\CollectionInterface $leagues
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New League'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Seasons'), ['controller' => 'Seasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Season'), ['controller' => 'Seasons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fixtures'), ['controller' => 'Fixtures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fixture'), ['controller' => 'Fixtures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pool Dividers'), ['controller' => 'PoolDividers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pool Divider'), ['controller' => 'PoolDividers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pool Played Games'), ['controller' => 'PoolPlayedGames', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pool Played Game'), ['controller' => 'PoolPlayedGames', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pool Team Results'), ['controller' => 'PoolTeamResults', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pool Team Result'), ['controller' => 'PoolTeamResults', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pool Teams'), ['controller' => 'PoolTeams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pool Team'), ['controller' => 'PoolTeams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Team Results'), ['controller' => 'TeamResults', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team Result'), ['controller' => 'TeamResults', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="leagues index large-9 medium-8 columns content">
    <h3><?= __('Leagues') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('season_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('teams_in_league') ?></th>
                <th scope="col"><?= $this->Paginator->sort('results_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('xmlsoccer_leagueid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($leagues as $league): ?>
            <tr>
                <td><?= $this->Number->format($league->id) ?></td>
                <td><?= h($league->code) ?></td>
                <td><?= h($league->name) ?></td>
                <td><?= $league->has('season') ? $this->Html->link($league->season->name, ['controller' => 'Seasons', 'action' => 'view', $league->season->id]) : '' ?></td>
                <td><?= $this->Number->format($league->teams_in_league) ?></td>
                <td><?= h($league->results_url) ?></td>
                <td><?= $this->Number->format($league->xmlsoccer_leagueid) ?></td>
                <td><?= h($league->created) ?></td>
                <td><?= h($league->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $league->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $league->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $league->id], ['confirm' => __('Are you sure you want to delete # {0}?', $league->id)]) ?>
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
