<?php
echo $this->element('navbar');
?>

<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Agency'), ['action' => 'edit', $agency->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Agency'), ['action' => 'delete', $agency->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agency->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Agencies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agency'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="agencies view large-10 medium-9 columns">
    <h2><?= h($agency->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Agency Name') ?></h6>
            <p><?= h($agency->agency_name) ?></p>
            <h6 class="subheader"><?= __('Username') ?></h6>
            <p><?= h($agency->username) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($agency->password) ?></p>
            <h6 class="subheader"><?= __('Postcode') ?></h6>
            <p><?= h($agency->postcode) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($agency->email) ?></p>
            <h6 class="subheader"><?= __('Phone Number') ?></h6>
            <p><?= h($agency->phone_number) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($agency->id) ?></p>
            <h6 class="subheader"><?= __('State') ?></h6>
            <p><?= $this->Number->format($agency->state) ?></p>
            <h6 class="subheader"><?= __('City') ?></h6>
            <p><?= $this->Number->format($agency->city) ?></p>
            <h6 class="subheader"><?= __('Country') ?></h6>
            <p><?= $this->Number->format($agency->country) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created Date') ?></h6>
            <p><?= h($agency->created_date) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= $agency->status ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
