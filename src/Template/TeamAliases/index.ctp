<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\FootballData.TeamAlias[]|\Cake\Collection\CollectionInterface $teamAliases
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Team Alias'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="teamAliases index large-9 medium-8 columns content">
    <h3><?= __('Team Aliases') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($teamAliases as $teamAlias): ?>
            <tr>
                <td><?= $this->Number->format($teamAlias->id) ?></td>
                <td><?= h($teamAlias->name) ?></td>
                <td><?= $teamAlias->has('team') ? $this->Html->link($teamAlias->team->name, ['controller' => 'Teams', 'action' => 'view', $teamAlias->team->id]) : '' ?></td>
                <td><?= h($teamAlias->created) ?></td>
                <td><?= h($teamAlias->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $teamAlias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $teamAlias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $teamAlias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamAlias->id)]) ?>
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
