<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\FootballData.Team[]|\Cake\Collection\CollectionInterface $teams
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Team'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Leagues'), ['controller' => 'Leagues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New League'), ['controller' => 'Leagues', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Team Aliases'), ['controller' => 'TeamAliases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team Alias'), ['controller' => 'TeamAliases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Team Results'), ['controller' => 'TeamResults', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team Result'), ['controller' => 'TeamResults', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="teams index large-9 medium-8 columns content">
    <h3><?= __('Teams') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('league_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('logo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('xmlsoccer_teamid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('footballdata_teamid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stadium') ?></th>
                <th scope="col"><?= $this->Paginator->sort('home_page_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wiki_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('squad_market_value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('crest_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($teams as $team): ?>
            <tr>
                <td><?= $this->Number->format($team->id) ?></td>
                <td><?= h($team->name) ?></td>
                <td><?= $team->has('league') ? $this->Html->link($team->league->name, ['controller' => 'Leagues', 'action' => 'view', $team->league->id]) : '' ?></td>
                <td><?= h($team->logo) ?></td>
                <td><?= $this->Number->format($team->xmlsoccer_teamid) ?></td>
                <td><?= $this->Number->format($team->footballdata_teamid) ?></td>
                <td><?= h($team->country) ?></td>
                <td><?= h($team->stadium) ?></td>
                <td><?= h($team->home_page_url) ?></td>
                <td><?= h($team->wiki_url) ?></td>
                <td><?= $this->Number->format($team->squad_market_value) ?></td>
                <td><?= h($team->crest_url) ?></td>
                <td><?= h($team->created) ?></td>
                <td><?= h($team->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $team->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $team->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $team->id], ['confirm' => __('Are you sure you want to delete # {0}?', $team->id)]) ?>
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
