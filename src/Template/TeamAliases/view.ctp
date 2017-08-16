<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\FootballData.TeamAlias $teamAlias
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Team Alias'), ['action' => 'edit', $teamAlias->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Team Alias'), ['action' => 'delete', $teamAlias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamAlias->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Team Aliases'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team Alias'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="teamAliases view large-9 medium-8 columns content">
    <h3><?= h($teamAlias->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($teamAlias->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team') ?></th>
            <td><?= $teamAlias->has('team') ? $this->Html->link($teamAlias->team->name, ['controller' => 'Teams', 'action' => 'view', $teamAlias->team->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($teamAlias->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($teamAlias->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($teamAlias->modified) ?></td>
        </tr>
    </table>
</div>
