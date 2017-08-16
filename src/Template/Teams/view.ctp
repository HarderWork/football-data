<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\FootballData.Team $team
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Team'), ['action' => 'edit', $team->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Team'), ['action' => 'delete', $team->id], ['confirm' => __('Are you sure you want to delete # {0}?', $team->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leagues'), ['controller' => 'Leagues', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New League'), ['controller' => 'Leagues', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Team Aliases'), ['controller' => 'TeamAliases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team Alias'), ['controller' => 'TeamAliases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Team Results'), ['controller' => 'TeamResults', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team Result'), ['controller' => 'TeamResults', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="teams view large-9 medium-8 columns content">
    <h3><?= h($team->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($team->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('League') ?></th>
            <td><?= $team->has('league') ? $this->Html->link($team->league->name, ['controller' => 'Leagues', 'action' => 'view', $team->league->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logo') ?></th>
            <td><?= h($team->logo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($team->country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stadium') ?></th>
            <td><?= h($team->stadium) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Home Page Url') ?></th>
            <td><?= h($team->home_page_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wiki Url') ?></th>
            <td><?= h($team->wiki_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Crest Url') ?></th>
            <td><?= h($team->crest_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($team->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Xmlsoccer Teamid') ?></th>
            <td><?= $this->Number->format($team->xmlsoccer_teamid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Footballdata Teamid') ?></th>
            <td><?= $this->Number->format($team->footballdata_teamid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Squad Market Value') ?></th>
            <td><?= $this->Number->format($team->squad_market_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($team->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($team->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Team Aliases') ?></h4>
        <?php if (!empty($team->team_aliases)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Team Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($team->team_aliases as $teamAliases): ?>
            <tr>
                <td><?= h($teamAliases->id) ?></td>
                <td><?= h($teamAliases->name) ?></td>
                <td><?= h($teamAliases->team_id) ?></td>
                <td><?= h($teamAliases->created) ?></td>
                <td><?= h($teamAliases->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TeamAliases', 'action' => 'view', $teamAliases->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TeamAliases', 'action' => 'edit', $teamAliases->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TeamAliases', 'action' => 'delete', $teamAliases->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamAliases->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Team Results') ?></h4>
        <?php if (!empty($team->team_results)): ?>
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
            <?php foreach ($team->team_results as $teamResults): ?>
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
