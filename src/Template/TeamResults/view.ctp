<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\FootballData.TeamResult $teamResult
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Team Result'), ['action' => 'edit', $teamResult->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Team Result'), ['action' => 'delete', $teamResult->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamResult->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Team Results'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team Result'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fixtures'), ['controller' => 'Fixtures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fixture'), ['controller' => 'Fixtures', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leagues'), ['controller' => 'Leagues', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New League'), ['controller' => 'Leagues', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Seasons'), ['controller' => 'Seasons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Season'), ['controller' => 'Seasons', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="teamResults view large-9 medium-8 columns content">
    <h3><?= h($teamResult->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Team') ?></th>
            <td><?= $teamResult->has('team') ? $this->Html->link($teamResult->team->name, ['controller' => 'Teams', 'action' => 'view', $teamResult->team->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fixture') ?></th>
            <td><?= $teamResult->has('fixture') ? $this->Html->link($teamResult->fixture->id, ['controller' => 'Fixtures', 'action' => 'view', $teamResult->fixture->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('League') ?></th>
            <td><?= $teamResult->has('league') ? $this->Html->link($teamResult->league->name, ['controller' => 'Leagues', 'action' => 'view', $teamResult->league->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Season') ?></th>
            <td><?= $teamResult->has('season') ? $this->Html->link($teamResult->season->name, ['controller' => 'Seasons', 'action' => 'view', $teamResult->season->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($teamResult->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Round') ?></th>
            <td><?= $this->Number->format($teamResult->round) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Home Team') ?></th>
            <td><?= $this->Number->format($teamResult->home_team) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Game Played') ?></th>
            <td><?= $this->Number->format($teamResult->game_played) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Win') ?></th>
            <td><?= $this->Number->format($teamResult->win) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Draw') ?></th>
            <td><?= $this->Number->format($teamResult->draw) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Loss') ?></th>
            <td><?= $this->Number->format($teamResult->loss) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Goals For') ?></th>
            <td><?= $this->Number->format($teamResult->goals_for) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Goals Against') ?></th>
            <td><?= $this->Number->format($teamResult->goals_against) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Points') ?></th>
            <td><?= $this->Number->format($teamResult->points) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Game Date') ?></th>
            <td><?= h($teamResult->game_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($teamResult->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($teamResult->modified) ?></td>
        </tr>
    </table>
</div>
