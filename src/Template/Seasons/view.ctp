<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\FootballData.Season $season
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Season'), ['action' => 'edit', $season->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Season'), ['action' => 'delete', $season->id], ['confirm' => __('Are you sure you want to delete # {0}?', $season->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Seasons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Season'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fixtures'), ['controller' => 'Fixtures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fixture'), ['controller' => 'Fixtures', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leagues'), ['controller' => 'Leagues', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New League'), ['controller' => 'Leagues', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Team Results'), ['controller' => 'TeamResults', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team Result'), ['controller' => 'TeamResults', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="seasons view large-9 medium-8 columns content">
    <h3><?= h($season->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($season->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($season->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($season->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($season->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Fixtures') ?></h4>
        <?php if (!empty($season->fixtures)): ?>
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
            <?php foreach ($season->fixtures as $fixtures): ?>
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
        <h4><?= __('Related Leagues') ?></h4>
        <?php if (!empty($season->leagues)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Season Id') ?></th>
                <th scope="col"><?= __('Teams In League') ?></th>
                <th scope="col"><?= __('Results Url') ?></th>
                <th scope="col"><?= __('Xmlsoccer Leagueid') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($season->leagues as $leagues): ?>
            <tr>
                <td><?= h($leagues->id) ?></td>
                <td><?= h($leagues->code) ?></td>
                <td><?= h($leagues->name) ?></td>
                <td><?= h($leagues->season_id) ?></td>
                <td><?= h($leagues->teams_in_league) ?></td>
                <td><?= h($leagues->results_url) ?></td>
                <td><?= h($leagues->xmlsoccer_leagueid) ?></td>
                <td><?= h($leagues->created) ?></td>
                <td><?= h($leagues->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Leagues', 'action' => 'view', $leagues->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Leagues', 'action' => 'edit', $leagues->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Leagues', 'action' => 'delete', $leagues->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leagues->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Team Results') ?></h4>
        <?php if (!empty($season->team_results)): ?>
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
            <?php foreach ($season->team_results as $teamResults): ?>
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
