<?php
echo $this->element('navbar');
?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List User Types'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="userTypes form large-10 medium-9 columns">
    <?= $this->Form->create($userType) ?>
    <fieldset>
        <legend><?= __('Add User Type') ?></legend>
        <?php
            echo $this->Form->input('user_type_name');
            echo $this->Form->input('user_type_description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
