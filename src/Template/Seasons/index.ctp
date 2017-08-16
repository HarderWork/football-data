<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\FootballData.Season[]|\Cake\Collection\CollectionInterface $seasons
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Season'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fixtures'), ['controller' => 'Fixtures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fixture'), ['controller' => 'Fixtures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Leagues'), ['controller' => 'Leagues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New League'), ['controller' => 'Leagues', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pool Dividers'), ['controller' => 'PoolDividers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pool Divider'), ['controller' => 'PoolDividers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pool Leagues'), ['controller' => 'PoolLeagues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pool League'), ['controller' => 'PoolLeagues', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pool Played Games'), ['controller' => 'PoolPlayedGames', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pool Played Game'), ['controller' => 'PoolPlayedGames', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pool Team Results'), ['controller' => 'PoolTeamResults', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pool Team Result'), ['controller' => 'PoolTeamResults', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Team Results'), ['controller' => 'TeamResults', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team Result'), ['controller' => 'TeamResults', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="seasons index large-9 medium-8 columns content">
    <h3><?= __('Seasons') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($seasons as $season): ?>
            <tr>
                <td><?= $this->Number->format($season->id) ?></td>
                <td><?= h($season->name) ?></td>
                <td><?= h($season->created) ?></td>
                <td><?= h($season->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $season->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $season->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $season->id], ['confirm' => __('Are you sure you want to delete # {0}?', $season->id)]) ?>
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
