<?php
echo $this->element('navbar');
?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Languages'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="languages form large-10 medium-9 columns">
    <?= $this->Form->create($language) ?>
    <fieldset>
        <legend><?= __('Add Language') ?></legend>
        <?php
            echo $this->Form->input('language_name');
            echo $this->Form->input('language_code');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
