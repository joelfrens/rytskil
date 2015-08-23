<?php
echo $this->element('navbar');
?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Occupation'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="occupations index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('occuption_name') ?></th>
            <th><?= $this->Paginator->sort('parent_id') ?></th>
            <th><?= $this->Paginator->sort('status') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($occupations as $occupation): ?>
        <tr>
            <td><?= $this->Number->format($occupation->id) ?></td>
            <td><?= h($occupation->occuption_name) ?></td>
            <td>
                <?= $occupation->has('parent_occupation') ? $this->Html->link($occupation->parent_occupation->id, ['controller' => 'Occupations', 'action' => 'view', $occupation->parent_occupation->id]) : '' ?>
            </td>
            <td><?= h($occupation->status) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $occupation->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $occupation->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $occupation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $occupation->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
