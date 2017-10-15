<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Seasons'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fixtures'), ['controller' => 'Fixtures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fixture'), ['controller' => 'Fixtures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Leagues'), ['controller' => 'Leagues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New League'), ['controller' => 'Leagues', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Team Results'), ['controller' => 'TeamResults', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team Result'), ['controller' => 'TeamResults', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="seasons form large-9 medium-8 columns content">
    <?= $this->Form->create($season) ?>
    <fieldset>
        <legend><?= __('Add Season') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
