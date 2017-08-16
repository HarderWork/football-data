<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Leagues'), ['controller' => 'Leagues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New League'), ['controller' => 'Leagues', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pool Team Aliases'), ['controller' => 'PoolTeamAliases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pool Team Alias'), ['controller' => 'PoolTeamAliases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pool Team Positions'), ['controller' => 'PoolTeamPositions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pool Team Position'), ['controller' => 'PoolTeamPositions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pool Team Results'), ['controller' => 'PoolTeamResults', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pool Team Result'), ['controller' => 'PoolTeamResults', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Team Aliases'), ['controller' => 'TeamAliases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team Alias'), ['controller' => 'TeamAliases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Team Results'), ['controller' => 'TeamResults', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team Result'), ['controller' => 'TeamResults', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="teams form large-9 medium-8 columns content">
    <?= $this->Form->create($team) ?>
    <fieldset>
        <legend><?= __('Add Team') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('league_id', ['options' => $leagues, 'empty' => true]);
            echo $this->Form->control('logo');
            echo $this->Form->control('xmlsoccer_teamid');
            echo $this->Form->control('footballdata_teamid');
            echo $this->Form->control('country');
            echo $this->Form->control('stadium');
            echo $this->Form->control('home_page_url');
            echo $this->Form->control('wiki_url');
            echo $this->Form->control('squad_market_value');
            echo $this->Form->control('crest_url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
