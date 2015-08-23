<?php
echo $this->element('navbar');
?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Language'), ['action' => 'edit', $language->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Language'), ['action' => 'delete', $language->id], ['confirm' => __('Are you sure you want to delete # {0}?', $language->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Languages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Language'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="languages view large-10 medium-9 columns">
    <h2><?= h($language->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Language Name') ?></h6>
            <p><?= h($language->language_name) ?></p>
            <h6 class="subheader"><?= __('Language Code') ?></h6>
            <p><?= h($language->language_code) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($language->id) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= $language->status ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
