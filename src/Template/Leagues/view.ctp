<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\FootballData.League $league
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit League'), ['action' => 'edit', $league->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete League'), ['action' => 'delete', $league->id], ['confirm' => __('Are you sure you want to delete # {0}?', $league->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Leagues'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New League'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Seasons'), ['controller' => 'Seasons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Season'), ['controller' => 'Seasons', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fixtures'), ['controller' => 'Fixtures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fixture'), ['controller' => 'Fixtures', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Team Results'), ['controller' => 'TeamResults', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team Result'), ['controller' => 'TeamResults', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="leagues view large-9 medium-8 columns content">
    <h3><?= h($league->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($league->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($league->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Season') ?></th>
            <td><?= $league->has('season') ? $this->Html->link($league->season->name, ['controller' => 'Seasons', 'action' => 'view', $league->season->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Results Url') ?></th>
            <td><?= h($league->results_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($league->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Teams In League') ?></th>
            <td><?= $this->Number->format($league->teams_in_league) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Xmlsoccer Leagueid') ?></th>
            <td><?= $this->Number->format($league->xmlsoccer_leagueid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($league->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($league->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Fixtures') ?></h4>
        <?php if (!empty($league->fixtures)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Game Date') ?></th>
                <th scope="col"><?= __('Game Start') ?></th>
                <th scope="col"><?= __('League Id') ?></th>
                <th scope="col"><?= __('Season Id') ?></th>
                <th scope="col"><?= __('Round') ?></th>
                <th scope="col"><?= __('Home Team Id') ?></th>
                <th scope="col"><?= __('Away Team Id') ?></th>
                <th scope="col"><?= __('Home Goals') ?></th>
                <th scope="col"><?= __('Away Goals') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Source') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($league->fixtures as $fixtures): ?>
            <tr>
                <td><?= h($fixtures->id) ?></td>
                <td><?= h($fixtures->game_date) ?></td>
                <td><?= h($fixtures->game_start) ?></td>
                <td><?= h($fixtures->league_id) ?></td>
                <td><?= h($fixtures->season_id) ?></td>
                <td><?= h($fixtures->round) ?></td>
                <td><?= h($fixtures->home_team_id) ?></td>
                <td><?= h($fixtures->away_team_id) ?></td>
                <td><?= h($fixtures->home_goals) ?></td>
                <td><?= h($fixtures->away_goals) ?></td>
                <td><?= h($fixtures->status) ?></td>
                <td><?= h($fixtures->source) ?></td>
                <td><?= h($fixtures->created) ?></td>
                <td><?= h($fixtures->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Fixtures', 'action' => 'view', $fixtures->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Fixtures', 'action' => 'edit', $fixtures->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fixtures', 'action' => 'delete', $fixtures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fixtures->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Team Results') ?></h4>
        <?php if (!empty($league->team_results)): ?>
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
            <?php foreach ($league->team_results as $teamResults): ?>
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
    <div class="related">
        <h4><?= __('Related Teams') ?></h4>
        <?php if (!empty($league->teams)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('League Id') ?></th>
                <th scope="col"><?= __('Logo') ?></th>
                <th scope="col"><?= __('Xmlsoccer Teamid') ?></th>
                <th scope="col"><?= __('Footballdata Teamid') ?></th>
                <th scope="col"><?= __('Country') ?></th>
                <th scope="col"><?= __('Stadium') ?></th>
                <th scope="col"><?= __('Home Page Url') ?></th>
                <th scope="col"><?= __('Wiki Url') ?></th>
                <th scope="col"><?= __('Squad Market Value') ?></th>
                <th scope="col"><?= __('Crest Url') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($league->teams as $teams): ?>
            <tr>
                <td><?= h($teams->id) ?></td>
                <td><?= h($teams->name) ?></td>
                <td><?= h($teams->league_id) ?></td>
                <td><?= h($teams->logo) ?></td>
                <td><?= h($teams->xmlsoccer_teamid) ?></td>
                <td><?= h($teams->footballdata_teamid) ?></td>
                <td><?= h($teams->country) ?></td>
                <td><?= h($teams->stadium) ?></td>
                <td><?= h($teams->home_page_url) ?></td>
                <td><?= h($teams->wiki_url) ?></td>
                <td><?= h($teams->squad_market_value) ?></td>
                <td><?= h($teams->crest_url) ?></td>
                <td><?= h($teams->created) ?></td>
                <td><?= h($teams->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Teams', 'action' => 'view', $teams->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Teams', 'action' => 'edit', $teams->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Teams', 'action' => 'delete', $teams->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teams->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
