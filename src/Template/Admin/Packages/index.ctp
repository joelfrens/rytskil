
<?php
echo $this->element('navbar');
?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Package'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="packages index large-10 medium-9 columns">
    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" class="table">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('package_name') ?></th>
                <th><?= $this->Paginator->sort('package_price') ?></th>
                <th><?= $this->Paginator->sort('package_status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($packages as $package): ?>
            <tr>
                <td><?= $this->Number->format($package->id) ?></td>
                <td><?= $this->Number->format($package->package_name) ?></td>
                <td><?= $this->Number->format($package->package_price) ?></td>
                <td><?= h($package->package_status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $package->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $package->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $package->id], ['confirm' => __('Are you sure you want to delete # {0}?', $package->id)]) ?>
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
