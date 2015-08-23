<?php
echo $this->element('navbar');
?>

<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Agencies'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="agencies form large-10 medium-9 columns">
    <?= $this->Form->create($agency) ?>
    <fieldset>
        <legend><?= __('Add Agency') ?></legend>
        <?php
            echo $this->Form->input('agency_name');
            echo $this->Form->input('username');
            echo $this->Form->input('password');
            echo $this->Form->input('created_date');
            echo $this->Form->input('postcode');
            echo $this->Form->input('email');
            echo $this->Form->input('phone_number');
            echo $this->Form->input('state');
            echo $this->Form->input('city');
            echo $this->Form->input('country');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
