<?php
echo $this->element('navbar');
?>

<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Agency'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="agencies index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('agency_name') ?></th>
            <th><?= $this->Paginator->sort('username') ?></th>
            <th><?= $this->Paginator->sort('password') ?></th>
            <th><?= $this->Paginator->sort('created_date') ?></th>
            <th><?= $this->Paginator->sort('postcode') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($agencies as $agency): ?>
        <tr>
            <td><?= $this->Number->format($agency->id) ?></td>
            <td><?= h($agency->agency_name) ?></td>
            <td><?= h($agency->username) ?></td>
            <td><?= h($agency->password) ?></td>
            <td><?= h($agency->created_date) ?></td>
            <td><?= h($agency->postcode) ?></td>
            <td><?= h($agency->email) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $agency->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agency->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $agency->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agency->id)]) ?>
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
