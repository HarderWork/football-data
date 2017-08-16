<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\FootballData.Fixture $fixture
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fixture'), ['action' => 'edit', $fixture->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fixture'), ['action' => 'delete', $fixture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fixture->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fixtures'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fixture'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leagues'), ['controller' => 'Leagues', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New League'), ['controller' => 'Leagues', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Seasons'), ['controller' => 'Seasons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Season'), ['controller' => 'Seasons', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Home Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Team Results'), ['controller' => 'TeamResults', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team Result'), ['controller' => 'TeamResults', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fixtures view large-9 medium-8 columns content">
    <h3><?= h($fixture->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('League') ?></th>
            <td><?= $fixture->has('league') ? $this->Html->link($fixture->league->name, ['controller' => 'Leagues', 'action' => 'view', $fixture->league->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Season') ?></th>
            <td><?= $fixture->has('season') ? $this->Html->link($fixture->season->name, ['controller' => 'Seasons', 'action' => 'view', $fixture->season->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Home Team') ?></th>
            <td><?= $fixture->has('home_team') ? $this->Html->link($fixture->home_team->name, ['controller' => 'Teams', 'action' => 'view', $fixture->home_team->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Away Team') ?></th>
            <td><?= $fixture->has('away_team') ? $this->Html->link($fixture->away_team->name, ['controller' => 'Teams', 'action' => 'view', $fixture->away_team->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fixture->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Round') ?></th>
            <td><?= $this->Number->format($fixture->round) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Home Goals') ?></th>
            <td><?= $this->Number->format($fixture->home_goals) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Away Goals') ?></th>
            <td><?= $this->Number->format($fixture->away_goals) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($fixture->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Source') ?></th>
            <td><?= $this->Number->format($fixture->source) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Game Date') ?></th>
            <td><?= h($fixture->game_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Game Start') ?></th>
            <td><?= h($fixture->game_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fixture->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($fixture->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Team Results') ?></h4>
        <?php if (!empty($fixture->team_results)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Team Id') ?></th>
                <th scope="col"><?= __('Fixture Id') ?></th>
                <th scope="col"><?= __('Game Date') ?></th>
                <th scope="col"><?= __('League Id') ?></th>
                <th scope="col"><?= __('Season Id') ?></th>
                <th scope="col"><?= __('Round') ?></th>
                <th scope="col"><?= __('Home Team') ?></th>
                <th scope="col"><?= __('Game Played') ?></th>
                <th scope="col"><?= __('Win') ?></th>
                <th scope="col"><?= __('Draw') ?></th>
                <th scope="col"><?= __('Loss') ?></th>
                <th scope="col"><?= __('Goals For') ?></th>
                <th scope="col"><?= __('Goals Against') ?></th>
                <th scope="col"><?= __('Points') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($fixture->team_results as $teamResults): ?>
            <tr>
                <td><?= h($teamResults->id) ?></td>
                <td><?= h($teamResults->team_id) ?></td>
                <td><?= h($teamResults->fixture_id) ?></td>
                <td><?= h($teamResults->game_date) ?></td>
                <td><?= h($teamResults->league_id) ?></td>
                <td><?= h($teamResults->season_id) ?></td>
                <td><?= h($teamResults->round) ?></td>
                <td><?= h($teamResults->home_team) ?></td>
                <td><?= h($teamResults->game_played) ?></td>
                <td><?= h($teamResults->win) ?></td>
                <td><?= h($teamResults->draw) ?></td>
                <td><?= h($teamResults->loss) ?></td>
                <td><?= h($teamResults->goals_for) ?></td>
                <td><?= h($teamResults->goals_against) ?></td>
                <td><?= h($teamResults->points) ?></td>
                <td><?= h($teamResults->created) ?></td>
                <td><?= h($teamResults->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TeamResults', 'action' => 'view', $teamResults->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TeamResults', 'action' => 'edit', $teamResults->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TeamResults', 'action' => 'delete', $teamResults->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamResults->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
