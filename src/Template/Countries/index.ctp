<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Country'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="countries index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('country_name') ?></th>
            <th><?= $this->Paginator->sort('country_code') ?></th>
            <th><?= $this->Paginator->sort('status') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($countries as $country): ?>
        <tr>
            <td><?= $this->Number->format($country->id) ?></td>
            <td><?= h($country->country_name) ?></td>
            <td><?= h($country->country_code) ?></td>
            <td><?= h($country->status) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $country->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $country->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $country->id], ['confirm' => __('Are you sure you want to delete # {0}?', $country->id)]) ?>
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