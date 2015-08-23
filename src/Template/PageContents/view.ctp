<?php
echo $this->element('navbar');
?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Page Content'), ['action' => 'edit', $pageContent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Page Content'), ['action' => 'delete', $pageContent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pageContent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Page Contents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Page Content'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="pageContents view large-10 medium-9 columns">
    <h2><?= h($pageContent->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Page Title') ?></h6>
            <p><?= h($pageContent->page_title) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($pageContent->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date Created') ?></h6>
            <p><?= h($pageContent->date_created) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= $pageContent->status ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Page Description') ?></h6>
            <?= $this->Text->autoParagraph(h($pageContent->page_description)) ?>
        </div>
    </div>
</div>
