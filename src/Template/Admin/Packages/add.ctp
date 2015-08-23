<?php
echo $this->element('navbar');
?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Packages'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="packages form large-10 medium-9 columns">
    <?= $this->Form->create($package) ?>
    <fieldset>
        <legend><?= __('Add Package') ?></legend>
        <?php
            echo $this->Form->input('package_name');
            echo $this->Form->input('package_description');
            echo $this->Form->input('package_price');
            echo $this->Form->input('package_status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
