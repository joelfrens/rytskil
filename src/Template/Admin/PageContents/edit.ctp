<?php
echo $this->element('navbar');
?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pageContent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pageContent->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Page Contents'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="pageContents form large-10 medium-9 columns">
    <?= $this->Form->create($pageContent) ?>
    <fieldset>
        <legend><?= __('Edit Page Content') ?></legend>
        <?php
            echo $this->Form->input('page_title');
            echo $this->Form->input('page_description');
            echo $this->Form->input('status');
            echo $this->Form->input('date_created');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
