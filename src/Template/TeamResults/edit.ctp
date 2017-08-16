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
                ['action' => 'delete', $teamResult->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $teamResult->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Team Results'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fixtures'), ['controller' => 'Fixtures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fixture'), ['controller' => 'Fixtures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Leagues'), ['controller' => 'Leagues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New League'), ['controller' => 'Leagues', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Seasons'), ['controller' => 'Seasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Season'), ['controller' => 'Seasons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="teamResults form large-9 medium-8 columns content">
    <?= $this->Form->create($teamResult) ?>
    <fieldset>
        <legend><?= __('Edit Team Result') ?></legend>
        <?php
            echo $this->Form->control('team_id', ['options' => $teams]);
            echo $this->Form->control('fixture_id', ['options' => $fixtures, 'empty' => true]);
            echo $this->Form->control('game_date');
            echo $this->Form->control('league_id', ['options' => $leagues]);
            echo $this->Form->control('season_id', ['options' => $seasons]);
            echo $this->Form->control('round');
            echo $this->Form->control('home_team');
            echo $this->Form->control('game_played');
            echo $this->Form->control('win');
            echo $this->Form->control('draw');
            echo $this->Form->control('loss');
            echo $this->Form->control('goals_for');
            echo $this->Form->control('goals_against');
            echo $this->Form->control('points');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
