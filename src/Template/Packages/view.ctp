<?php
echo $this->element('navbar');
?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Package'), ['action' => 'edit', $package->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Package'), ['action' => 'delete', $package->id], ['confirm' => __('Are you sure you want to delete # {0}?', $package->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Packages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Package'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="packages view large-10 medium-9 columns">
    <h2><?= h($package->id) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($package->id) ?></p>
            <h6 class="subheader"><?= __('Package Name') ?></h6>
            <p><?= $this->Number->format($package->package_name) ?></p>
            <h6 class="subheader"><?= __('Package Price') ?></h6>
            <p><?= $this->Number->format($package->package_price) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Package Status') ?></h6>
            <p><?= $package->package_status ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Package Description') ?></h6>
            <?= $this->Text->autoParagraph(h($package->package_description)) ?>
        </div>
    </div>
</div>
