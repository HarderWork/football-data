<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Leagues'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Seasons'), ['controller' => 'Seasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Season'), ['controller' => 'Seasons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fixtures'), ['controller' => 'Fixtures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fixture'), ['controller' => 'Fixtures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Team Results'), ['controller' => 'TeamResults', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team Result'), ['controller' => 'TeamResults', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="leagues form large-9 medium-8 columns content">
    <?= $this->Form->create($league) ?>
    <fieldset>
        <legend><?= __('Add League') ?></legend>
        <?php
            echo $this->Form->control('code');
            echo $this->Form->control('name');
            echo $this->Form->control('season_id', ['options' => $seasons]);
            echo $this->Form->control('teams_in_league');
            echo $this->Form->control('results_url');
            echo $this->Form->control('xmlsoccer_leagueid');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
