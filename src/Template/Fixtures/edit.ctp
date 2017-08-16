<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fixture->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fixture->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fixtures'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Leagues'), ['controller' => 'Leagues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New League'), ['controller' => 'Leagues', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Seasons'), ['controller' => 'Seasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Season'), ['controller' => 'Seasons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Home Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Team Results'), ['controller' => 'TeamResults', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team Result'), ['controller' => 'TeamResults', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fixtures form large-9 medium-8 columns content">
    <?= $this->Form->create($fixture) ?>
    <fieldset>
        <legend><?= __('Edit Fixture') ?></legend>
        <?php
            echo $this->Form->control('game_date');
            echo $this->Form->control('game_start');
            echo $this->Form->control('league_id', ['options' => $leagues]);
            echo $this->Form->control('season_id', ['options' => $seasons]);
            echo $this->Form->control('round');
            echo $this->Form->control('home_team_id', ['options' => $homeTeams]);
            echo $this->Form->control('away_team_id', ['options' => $awayTeams]);
            echo $this->Form->control('home_goals');
            echo $this->Form->control('away_goals');
            echo $this->Form->control('status');
            echo $this->Form->control('source');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
