<?php
echo $this->element('navbar');
?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Page Content'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="pageContents index large-10 medium-9 columns">
    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" class="table">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('page_title') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('date_created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($pageContents as $pageContent): ?>
            <tr>
                <td><?= $this->Number->format($pageContent->id) ?></td>
                <td><?= h($pageContent->page_title) ?></td>
                <td><?= h($pageContent->status) ?></td>
                <td><?= h($pageContent->date_created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pageContent->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pageContent->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pageContent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pageContent->id)]) ?>
                </td>
            </tr>

        <?php endforeach; ?>
        </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
