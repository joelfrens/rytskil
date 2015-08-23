<?php
echo $this->element('navbar');
?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User Type'), ['action' => 'edit', $userType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Type'), ['action' => 'delete', $userType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Type'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="userTypes view large-10 medium-9 columns">
    <h2><?= h($userType->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User Type Name') ?></h6>
            <p><?= h($userType->user_type_name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($userType->id) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('User Type Description') ?></h6>
            <?= $this->Text->autoParagraph(h($userType->user_type_description)) ?>
        </div>
    </div>
</div>
