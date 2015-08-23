<?php
echo $this->element('navbar');
?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $occupation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $occupation->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Occupations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Parent Occupations'), ['controller' => 'Occupations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parent Occupation'), ['controller' => 'Occupations', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="occupations form large-10 medium-9 columns">
    <?= $this->Form->create($occupation) ?>
    <fieldset>
        <legend><?= __('Edit Occupation') ?></legend>
        <?php
            echo $this->Form->input('occuption_name');
            echo $this->Form->input('parent_id', ['options' => $parentOccupations]);
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
